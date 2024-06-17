// const chargeArticles = (numPage) => {
const chargeArticles = () => {
  $.post(
    ajaxfijParams.ajaxurl,
    {
      action: "ajaxfij_submit",
      type: "articles",
      // page: numPage,
    },
    (data, status) => {
      // console.log(numPage);
      console.log(data);
    }
  );
};

console.log("ajaxfij");
