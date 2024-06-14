const chargeArticles = (numPage) => {
  $.post(
    ajaxfijParams.ajaxurl,
    {
      action: "ajaxfij_submit",
      type: "articles",
      page: numPage,
    },
    (data, status) => {
      // console.log(numPage);
    }
  );
};
