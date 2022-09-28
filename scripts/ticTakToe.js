"use strict";

let playerOne = getRandom(0, 1);
let playerTwo = null;
let players = document.querySelectorAll("img[src$='player.svg']");
let imgBox = document.getElementById("imgBox");
let gameBoxItems = document.querySelectorAll(".item");
let itemBox = document.querySelectorAll(".miniBox");

if (playerOne == 1) {
  playerTwo = 0;
  //alert('Ходят крестики');
  /*   playerTwo = document.querySelector(".x");

  playerOne = document.querySelector(".zero"); */
} else {
  playerTwo = 1;
  //alert('Ходят нолики');
}

for (let player of players) {
  player.onmousedown = function () {
    player.style.position = "absolute";
    player.style.zIndex = 1;
    document.addEventListener("mousemove", moveElement);

    player.onmouseup = function () {
      document.removeEventListener("mousemove", moveElement);

      let playerTop = player.getBoundingClientRect().top;
      let playerLeft = player.getBoundingClientRect().left;
      let playerRight = player.getBoundingClientRect().right;
      let playerBottom = player.getBoundingClientRect().bottom;
      let imgEl = document.getElementsByClassName("item");
      itemBox.forEach((elem) => {
        let i = 8;
        if (
          playerTop + player.offsetHeight > elem.getBoundingClientRect().top &&
          playerLeft + player.offsetWidth > elem.getBoundingClientRect().left &&
          playerRight - player.offsetWidth <
            elem.getBoundingClientRect().right &&
          playerBottom - player.offsetHeight <
            elem.getBoundingClientRect().bottom
        ) {
          elem.append(player);
          i = i++;
          imgEl[i].classList.remove("hidden");

          checkWinner();
        }
      });
    };

    function moveElement(event) {
      let x = event.clientX - 25;
      let y = event.clientY - 25;

      player.style.top = y + "px";
      player.style.left = x + "px";
    }
  };

  player.ondragstart = function () {
    return false;
  };
}

function checkWinner() {
  //x
  let i = 0;
  let arrItem = [];
  let arrGameBox = [];
  itemBox.forEach((elem) => {
    if (elem.childNodes.length == 1) {
      arrItem.push(elem.children);
      arrGameBox.push(itemBox[i]);
      i += 1;
    }
  });

  if (arrGameBox.length == 9) {
    console.log("full");
    playerOne = document.querySelectorAll(".x");
    console.log(playerOne);
    playerTwo = document.querySelectorAll(".zero");

    if (
      arrGameBox[0].childNodes[0] ==
        (playerOne[0] ||
          playerOne[1] ||
          playerOne[2] ||
          playerOne[3] ||
          playerOne[4]) &&
      arrGameBox[1].childNodes[0] ==
        (playerOne[0] ||
          playerOne[1] ||
          playerOne[2] ||
          playerOne[3] ||
          playerOne[4]) &&
      arrGameBox[2].childNodes[0] ==
        (playerOne[0] ||
          playerOne[1] ||
          playerOne[2] ||
          playerOne[3] ||
          playerOne[4])
    ) {
      console.log("true");
    }
  }
  //y
}

function getRandom(min, max) {
  return Math.round(Math.random() * (max - min) + min);
}

/* const winCoord = {
    '1': (0, 1, 2),
    '2': (3, 4, 5),
    '3': (6, 7, 8),
    '4': (0, 3, 6),
    '5': (1, 4, 7),
    '6': (2, 5, 8),
    '7': (0, 4, 8),
    '8': (2, 4, 8)
};

const one = 1;
const two = 2;
const thre = 3;
const four = 4;
const five = 5;
const six = 6;
const seven = 7;
const eight = 8;
const nine = 9; */
