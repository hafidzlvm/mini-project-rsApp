// // live search ajax id is search and results. Contoh Awal berikut di bawah.
// $(document).ready(function () {
//   $(".live input.form-control").keyup(function () {
//     const searchOne = $(".searchOne").val();
//     const searchTwo = $("#searchTwo").val();
//     const searchThree = $("#searchThree").val();
//     if (searchOne != "") { // if yang sesuai pada kali ini adalah ?????????
//       var dataToSend = {
//         searchOne: searchOne,
//       };
//       if (searchTwo != "") {
//         dataToSend.searchTwo = searchTwo;
//       }
//       if (searchThree != "") {
//         dataToSend.searchThree = searchThree;
//       }
//       $.ajax({
//         url: "http://localhost/Source%20Code/mini-project-rsApp/home/search",
//         method: "POST",
//         data: dataToSend,
//         success: function (data) {
//           $("#hasil").html(data);
//         },
//       });
//     } else {
//       $.ajax({
//         url: "http://localhost/Source%20Code/mini-project-rsApp/home/search",
//         method: "POST",
//         success: function (data) {
//           $("#hasil").html(data);
//         },
//       });
//     }
//   });
// });

$(document).ready(function () {
  const searchOneInput = $(".searchOne");
  const searchTwoInput = $("#searchTwo");
  const searchThreeInput = $("#searchThree");

  function performSearch() {
    const searchOne = searchOneInput.val();
    const searchTwo = searchTwoInput.val();
    const searchThree = searchThreeInput.val();

    var dataToSend = {};
    if (searchOne) {
      dataToSend.searchOne = searchOne;
    }

    if (searchTwo) {
      dataToSend.searchTwo = searchTwo;
    }

    if (searchThree) {
      dataToSend.searchThree = searchThree;
    }
    console.log(dataToSend);
    if ((dataToSend == {})) {
      $.ajax({
        url: "http://localhost/Source%20Code/mini-project-rsApp/home/search",
        method: "POST",
        success: function () {
          $("#hasil").html();
          console.log('ok');
        },
      });
    } else {
      $.ajax({
        url: "http://localhost/Source%20Code/mini-project-rsApp/home/search",
        method: "POST",
        data: dataToSend,
        success: function (data) {
          $("#hasil").html(data);
        },
      });
    }
  }

  // Bind the keyup event to the search inputs
  searchOneInput.keyup(performSearch);
  searchTwoInput.keyup(performSearch);
  searchThreeInput.keyup(performSearch);
});
