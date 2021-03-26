var btns = document.getElementsByClassName("row");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current.length
      ? (current[0].className = current[0].className.replace(" active", ""))
      : null;
    this.className += " active";
  });
}

var config = {
  pieceTheme: "../img/{piece}.png",
  draggable: true,
  position: "start",
};

var board = Chessboard("myBoard", config);
var game = new Chess();

$(window).resize(board.resize);
let index;
let pgnMoves;

const nextMove = () => {
  if (pgnMoves && index < pgnMoves.length) {
    game.move(pgnMoves[index++]);
    board.position(game.fen());
  }
};

const previousMove = () => {
  if (index > 0 && index <= pgnMoves.length) {
    game.undo();
    board.position(game.fen());
    index--;
  }
};

const setBoard = (opening) => {
  index = 0;
  game.load_pgn(opening);
  pgnMoves = game.history();
  game.reset();
  board.start();
  $(".pgn").text(opening);
};
