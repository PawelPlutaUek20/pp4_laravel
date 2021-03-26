$(".readonly").on("keydown paste focus mousedown", function (e) {
    if (e.keyCode != 9)
      // ignore tab
      e.preventDefault();
  });

  // function validateForm() {
  //   var x = document.forms["myForm"]["variation"].value;
  //   if (x.length > 25 || x.length == 0) {
  //     return false;
  //   }
  // }
  

  function validateForm() {

    let ck_pgn = convertToPGN(game.history());
    
    if (ck_pgn == $("#moves").text()) {
       return true;
     }
    return false;
  }
  
  const moveBack = () => {
    game.undo();
    board.position(game.fen());
    var pgn = convertToPGN(game.history());
    $("#moves").text(pgn);
  };
  
  const convertToPGN = (arr) => {
    var pgn = "";
  
    // [a, b, c, d] => [[a, b], [c, d]]
    var chunkPairs = Array.from(new Array(Math.ceil(arr.length / 2)), (_, i) =>
      arr.slice(i * 2, i * 2 + 2)
    );
  
    // [[a, b], [c, d]] => "1. a b 2. c d"
    for (var i = 0; i < chunkPairs.length; i++) {
      pgn += `${i + 1}. ${chunkPairs[i].join(" ")} `;
    }
  
    return pgn;
  };
  
  function onDrop(source, target) {
    // see if the move is legal
    var move = game.move({
      from: source,
      to: target,
      promotion: "q",
    });
  
    // illegal move
    if (move === null) return "snapback";
  }
  
  function onSnapEnd() {
    var pgn = convertToPGN(game.history());
  
    $("#moves").text(pgn);
  
    board.position(game.fen());
  }
  
  var config = {
    pieceTheme: "img/{piece}.png",
    draggable: true,
    position: "start",
    onDrop: onDrop,
    onSnapEnd: onSnapEnd,
  };
  
  var board = Chessboard("myBoard", config);
  var game = new Chess();
  
  $(window).resize(board.resize);
  