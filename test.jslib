mergeInto(LibraryManager.library, {

  Hello: function () {
    name = "<?php echo $_SESSION['name']; ?>";
    return(name) 
  }
})