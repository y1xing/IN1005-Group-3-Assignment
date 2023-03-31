const number = document.getElementById("number");
const left = document.getElementById("left");
const right = document.getElementById("right");
const separator = document.getElementById("separator");

const number2 = document.getElementById("number2");
const left2 = document.getElementById("left2");
const right2 = document.getElementById("right2");
const separator2 = document.getElementById("separator2");

let target = 2080;
let target2 = 179;

let current = 1000;
let current2 = 1000;
const step = 42;

const start = () => {
  right.classList.add("animate");

  update();
};

const updateValues = () => {
  const [first, ...rest] = current.toLocaleString("en-US").split(",").reverse();
  thousends = rest.reverse();

  const thousendsString = thousends.join("");
  if (+left.innerText != thousendsString) {
    left.classList.add("animate");
  } else {
    left.classList.remove("animate");
  }
  left.innerText = thousendsString;
  right.innerText = first;
};

const update = () => {
  if (target - current > 0) {
    current += step;
  } else {
    current -= step;
  }
  if (current >= 1000) {
    separator.classList.add("show");
  } else {
    separator.classList.remove("show");
  }
  updateValues();
  if (Math.abs(target - current) > step) {
    requestAnimationFrame(update);
  } else {
    requestAnimationFrame(() => {
      current = target;
      updateValues();
      left.classList.remove("animate");
      right.classList.remove("animate");
    });
  }
};

const start2 = () => {
  right2.classList.add("animate");

  update2();
};

const updateValues2 = () => {
  const [first, ...rest] = current2
    .toLocaleString("en-US")
    .split(",")
    .reverse();
  thousends = rest.reverse();

  const thousendsString = thousends.join("");
  if (+left.innerText != thousendsString) {
    left2.classList.add("animate");
  } else {
    left2.classList.remove("animate");
  }
  left2.innerText = thousendsString;
  right2.innerText = first;
};

const update2 = () => {
  if (target2 - current2 > 0) {
    current2 += step;
  } else {
    current2 -= step;
  }
  if (current2 >= 1000) {
    separator2.classList.add("show");
  } else {
    separator2.classList.remove("show");
  }
  updateValues2();
  if (Math.abs(target2 - current2) > step) {
    requestAnimationFrame(update2);
  } else {
    requestAnimationFrame(() => {
      current2 = target2;
      updateValues2();
      left2.classList.remove("animate");
      right2.classList.remove("animate");
    });
  }
};

const number3 = document.getElementById("number3");
const left3 = document.getElementById("left3");
const right3 = document.getElementById("right3");
let target3 = 1870;
let current3 = 0;
const step3 = 42;

const start3 = () => {
  right3.classList.add("animate");
  update3();
};

const updateValues3 = () => {
  const [first, ...rest] = current3
    .toLocaleString("en-US")
    .split(",")
    .reverse();
  thousends = rest.reverse();

  const thousendsString = thousends.join("");
  if (+left3.innerText != thousendsString) {
    left3.classList.add("animate");
  } else {
    left3.classList.remove("animate");
  }
  left3.innerText = thousendsString;
  right3.innerText = first;
};

const update3 = () => {
  if (target3 - current3 > 0) {
    current3 += step3;
  } else {
    current3 -= step3;
  }
  if (current3 >= 1000) {
    separator3.classList.add("show");
  } else {
    separator3.classList.remove("show");
  }
  updateValues3();
  if (Math.abs(target3 - current3) > step3) {
    requestAnimationFrame(update3);
  } else {
    requestAnimationFrame(() => {
      current3 = target3;
      updateValues3();
      left3.classList.remove("animate");
      right3.classList.remove("animate");
    });
  }
};

const elementToObserve = document.querySelector(".stats-main");

const options = {
  root: null, // the viewport is used as the root
  rootMargin: "0px",
  threshold: 0.5, // trigger the function when 50% of the element is visible
};

const observer = new IntersectionObserver(function (entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // call your function here
      requestAnimationFrame(start3);

      requestAnimationFrame(start);
      requestAnimationFrame(start2);

      // stop observing the element to avoid multiple calls
      observer.unobserve(entry.target);
    }
  });
}, options);

observer.observe(elementToObserve);
