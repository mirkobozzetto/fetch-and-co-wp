// // const chargeArticles = (numPage) => {
// const chargeArticles = () => {
//   $.post(
//     ajaxfijParams.ajaxurl,
//     {
//       action: "ajaxfij_submit",
//       type: "articles",
//       // page: numPage,
//     },
//     (data, status) => {
//       // console.log(numPage);
//       console.log(data);
//     }
//   );
// };

// console.log("ajaxfij");
// chargeArticles();

const chargeArticles = () => {
  fetch(ajaxfijParams.ajaxurl, {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: new URLSearchParams({
      action: "ajaxfij_submit",
      type: "articles",
    }),
  })
    .then((response) => response.text())
    .then((data) => {
      // console.log(data);
      document.getElementById("articles-container").innerHTML = data;
    })
    .catch((error) => {
      console.error("Erreur:", error);
    });
};

chargeArticles();
