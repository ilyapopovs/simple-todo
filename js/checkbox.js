function onCheck(taskID) {
    // sets the action to switch 'done' of the task whose checkbox was clicked
    var page_y = document.getElementsByTagName("body")[0].scrollTop;
    window.location = "index.php?page=main&action=checkbox&id=" + taskID + "&page_y=" + page_y;
}
