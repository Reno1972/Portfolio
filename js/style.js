// SITE DU PORTFOLIO

// Function du thème

  // Menu Mobile

function menuMobile() {
  const btn = document.querySelector('.burger');
  const header = document.querySelector('.header');
  const links = document.querySelectorAll('.navbar a');

  btn.addEventListener('click', () => {
    header.classList.toggle('show-nav'); //toggle permet d'alterner 2 actions (ouvrir fermer ici)
  });

  links.forEach(link => {
    link.addEventListener('click', () => {
      header.classList.remove('show-nav');
    });
  });
}

menuMobile();

  // Portfolio

function tabsFilters() {
  const tabs = document.querySelectorAll('.portfolio-filters a');
  const projets = document.querySelectorAll('.portfolio .card');

  const resetActiveLinks = ( )=> {
    tabs.forEach(elem => {
      elem.classList.remove('active');
    });
  }

  const showProjects = (elem) => {
    projets.forEach(projet => {
      let filter = projet.getAttribute('data-category');

      if (elem === 'all') {
        projet.parentNode.classList.remove('hide');
        return
      }

      filter !== elem ? projet.parentNode.classList.add('hide') : projet.parentNode.classList.remove('hide');

    });
  };

  tabs.forEach(elem => {
    elem.addEventListener('click', (event) => {
      event.preventDefault();
      let filter = elem.getAttribute('data-filter');
      showProjects(filter);
      resetActiveLinks();
      elem.classList.add('active');
    });
  });
}

tabsFilters();

function showProjectDetails() {
  const links = document.querySelectorAll('.card__link');
  const modals = document.querySelectorAll('.modal');
  const btns = document.querySelectorAll('.modal__close');

  const hideModals = () => {
    modals.forEach(modal => {
      modal.classList.remove('show');
    });
  }

  links.forEach(elem => {
    elem.addEventListener('click', (event) => {
      event.preventDefault();
      document.querySelector(`[id=${elem.dataset.id}]`).classList.add('show');
    });
  });

  btns.forEach(btn => {
    btn.addEventListener('click', (event) => {
      hideModals();
    });
  });
}

showProjectDetails();

// EFFETS

const observerIntersectionAnimation = () => {
  const sections = document.querySelectorAll('section');
  const skills = document.querySelectorAll('.skills .bar');

  sections.forEach((section, index) => {
    if (index === 0) return;
    section.style.opacity = "0";
    section.style.transition = "all 1.6s";
  });

  skills.forEach((elem, index) => {
    elem.style.width = "0";
    elem.style.transition = "all 1.6s";
  });

  let sectionObserver = new IntersectionObserver(function (entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        let elem = entry.target;
        elem.style.opacity = 1;
      }
    });
  });

  sections.forEach(section => {
    sectionObserver.observe(section);
  });

  let skillsObserver = new IntersectionObserver(function (entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        let elem = entry.target;
        elem.style.width = elem.dataset.width + '%';
      }
    });
  });

  skills.forEach(skill => {
    skillsObserver.observe(skill);
  });
}

observerIntersectionAnimation();