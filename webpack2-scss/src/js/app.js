import "../css/main.scss";
import { RandomGenerator } from "./random-generator";

const output = document.querySelector("#output");

const outputRandomInt = () => {
  output.textContent = RandomGenerator.randomInteger();
}

const outputRandomRange = () => {
  output.textContent = RandomGenerator.randomInteger(1, 500);
}

const buttonRndInt = document.querySelector("#randomInt");
const buttonRndRange = document.querySelector("#randomRange");

buttonRndInt.addEventListener("click", outputRandomInt);
buttonRndRange.addEventListener("click", outputRandomRange);

