document.addEventListener("DOMContentLoaded", () => {
  function initializeAccordions() {
    const SPEED = 0.3;

    const openAccordion = (element) => {
      gsap.to(element, {
        height: "auto",
        duration: SPEED,
        // onComplete: () => ScrollTrigger.refresh(),
      });
    };
    const closeAccordion = (element) => {
      gsap.to(element, {
        height: 0,
        duration: SPEED,
        // onComplete: () => ScrollTrigger.refresh(),
      });
    };

    document.addEventListener("click", (event) => {
      if (
        event.target.matches(".js-accordion-btn") ||
        event.target.closest(".js-accordion-btn")
      ) {
        const btn = event.target.matches(".js-accordion-btn")
          ? event.target
          : event.target.closest(".js-accordion-btn");
        const element = btn.closest(".js-accordion");
        const content = element.querySelector(".js-accordion-content");
        const elements = Array.from(document.querySelectorAll(".js-accordion"));

        // event.preventDefault();

        if (element.hasAttribute("data-close-other")) {
          elements.forEach((otherElement) => {
            if (otherElement !== element) {
              if (otherElement.classList.contains("active")) {
                const content = otherElement.querySelector(
                  ".js-accordion-content"
                );
                closeAccordion(content);
                otherElement.classList.remove("active");
              }
            }
          });
        }

        if (element.classList.contains("active")) {
          closeAccordion(content);
        } else {
          openAccordion(content);
        }
        element.classList.toggle("active");
      }
    });
  }

  initializeAccordions();

  const accBtns = Array.from(document.querySelectorAll(".js-accordion-btn"));

  accBtns.forEach((btn) => {
    if (btn.parentElement.classList.contains("active")) btn.click();
  });

  const onlyNumericInputs = Array.from(
    document.querySelectorAll(".js-numeric-input-decimals")
  );

  onlyNumericInputs.forEach((input) => {
    input.addEventListener("input", () => {
      const value = input.value;
      const newCleanedValue = parseInt(value.replace(/[^\d]+/g, ""), 10);
      if (isNaN(newCleanedValue)) {
        input.value = "";
      } else {
        input.value = newCleanedValue.toLocaleString();
      }
    });
  });

  let timer = null;
  function startTimer() {
    var minute = 29;
    var sec = 60;
    if (timer) {
      clearInterval(timer);
    }
    timer = setInterval(function () {
      document.querySelector(".js-countdown").innerHTML =
        minute.toString().padStart(2, "0") +
        ":" +
        sec.toString().padStart(2, "0");
      sec--;
      if (sec == 00) {
        minute--;
        sec = 60;
        if (minute == 0) {
          minute = 5;
        }
      }
    }, 1000);
  }

  window.startTimer = startTimer;

  const payUsdtBtn = document.querySelector(".js-pay-usdt-btn");
  const payUsdtBlock = document.querySelector(".js-pay-usdt-block");
  if (payUsdtBtn && payUsdtBlock) {
    payUsdtBtn.addEventListener("click", (event) => {
      event.preventDefault();
      payUsdtBtn.classList.toggle("active");
      payUsdtBlock.classList.toggle("hidden");
      startTimer();
    });
  }

  function tabs() {
    const elements = Array.from(document.querySelectorAll(".js-tabs"));

    elements.forEach((element) => {
      const btns = Array.from(element.querySelectorAll(".js-tabs-btn"));
      const items = Array.from(element.querySelectorAll(".js-tabs-item"));

      const setActiveTab = (index) => {
        btns.forEach((btn) => btn.classList.remove("active"));
        items.forEach((item) => item.classList.remove("active"));

        btns[index].classList.add("active");
        items[index].classList.add("active");
      };

      if (items.length) {
        const activeIndex = btns.findIndex((btn) =>
          btn.classList.contains("active")
        );

        if (activeIndex !== -1) {
          setActiveTab(activeIndex);
        }
      }

      btns.forEach((btn, btnIndex) => {
        btn.addEventListener("click", (event) => {
          event.preventDefault();
          setActiveTab(btnIndex);
        });
      });
    });
  }

  tabs();

  function modals() {
    window.activeModal = null;

    function openModal(id, event) {
      const modal = document.querySelector(`.js-modal${id}`);
      if (!modal) {
        // console.error(`Modal with ID: ${id} not found`);
        return;
      }

      if (typeof window.closeMenu === "function") {
        window.closeMenu();
      }

      if (event) {
        event.preventDefault();
      }

      console.log("Opening modal", modal);

      const openHandler = () => {
        modal.classList.add("active");
        document.body.classList.add("modal-open");
        window.activeModal = modal;

        const openModalEvent = new CustomEvent("openmodal");
        document.dispatchEvent(openModalEvent);
      };
      if (window.activeModal) {
        closeModal(window.activeModal);

        setTimeout(() => {
          openHandler();
        }, 400);
      } else {
        openHandler();
      }
    }

    function closeModal(modal) {
      document.body.classList.remove("modal-open");

      modal.classList.remove("active");

      window.activeModal = null;

      const closeModalEvent = new CustomEvent("closemodal");
      document.dispatchEvent(closeModalEvent);
    }

    window.openModal = openModal;

    window.closeModal = closeModal;

    document.addEventListener("click", (event) => {
      if (event.target.matches("a") || event.target.closest("a")) {
        const link = event.target.matches("a")
          ? event.target
          : event.target.closest("a");
        const hash = link.hash;
        if (!hash) return;
        openModal(hash, event);
      } else if (
        event.target.matches(".js-close-modal") ||
        event.target.closest(".js-close-modal")
      ) {
        event.preventDefault();
        const modalToClose = event.target.closest(".js-modal");
        closeModal(modalToClose);
      } else if (event.target.matches(".js-modal")) {
        event.preventDefault();
        const modalToClose = event.target;
        closeModal(modalToClose);
      }
    });

    document.addEventListener("keydown", function (event) {
      if (event.which === 27 && window.activeModal) {
        closeModal(window.activeModal);
      }
    });
  }

  modals();

  const copyToClipboard = (str) => {
    const el = document.createElement("textarea");
    el.value = str;
    el.setAttribute("readonly", "");
    el.style.position = "absolute";
    el.style.left = "-9999px";
    document.body.appendChild(el);
    el.select();
    document.execCommand("copy");
    document.body.removeChild(el);
  };

  function linkCopy() {
    const elements = Array.from(document.querySelectorAll(".js-copy-link"));

    elements.forEach((element) => {
      element.addEventListener("click", (event) => {
        event.preventDefault();

        copyToClipboard(element.getAttribute("data-copy-text"));

        if (window.showMessage) {
          window.showMessage("#link-copied");
        }
      });
    });
  }

  linkCopy();
});
