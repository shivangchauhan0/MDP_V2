<?php include("header.php") ?>
<?php include("sidenav-head.php") ?>
<div id="page-content-wrapper">
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <button class="ui button bg-red small" id="menu-toggle"><i class="fa fa-bars mr-1" aria-hidden="true"></i> Menu</button>
      <h2 class="ml-2 my-0 nav-head"><span class="corr">SUBJECTS</span> LIST</h2>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <p id="username" class="mt-0 mr-3"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
        </ul>
      </div>
  </nav>

  <div class="container-fluid my-3">
        <div class="head-bar-sec head-bar-grid">
            <h2>List of subjects</h2>
        </div>
        <table class="ui celled table">
            <thead>
                <tr>
                    <th>Class <span style="opacity:0">dddddkkkCTTTT</span></th>
                    <th>Year <span style="opacity:0">dddddkkkCTTTT</span></th>
                    <th>Subject <span style="opacity:0">SooooooUBJdddddddddddddddddddddddddddddddSdddddddddddddEdskkkkCTTTT</span></th>
                    <th>Course outcomes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Name">James</td>
                    <td data-label="Age">24</td>
                    <td data-label="Job">Engineer</td>
                    <td data-label="Job"><button class="ui button bg-red small" id="menu-toggle">Add</button></td>
                </tr>
                <tr>
                    <td data-label="Name">Jill</td>
                    <td data-label="Age">26</td>
                    <td data-label="Job">Engineer</td>
                    <td data-label="Job"><button class="ui button bg-red small" id="menu-toggle">Add</button></td>
                </tr>
                <tr>
                    <td data-label="Name">Elyse</td>
                    <td data-label="Age">24</td>
                    <td data-label="Job">Designer</td>
                    <td data-label="Job"><button class="ui button bg-red small" id="menu-toggle">Add</button></td>
                </tr>
            </tbody>
        </table>
  </div>
</div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
