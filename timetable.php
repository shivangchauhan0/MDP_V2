<?php include("header.php") ?>
<?php include("sidenav-head.php") ?>
 <!-- Page Content -->
 <div id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light border-bottom"
        >
        <button class="ui button bg-red small" id="menu-toggle"><i class="fa fa-bars mr-1" aria-hidden="true"></i> Menu</button>
        <h2 class="ml-2 my-0 nav-head">TIMETABLE</h2>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <p id="username" class="mt-0 mr-3"><i class='user icon'></i><strong><?php echo $_SESSION['name'] ?></strong></p>
          </ul>
        </div>
 </nav>
  <form action="timetable.php" method="post" id="tt-form">
  </form>
    <div class="container-fluid my-3 px-0">
    <div id="tt-warning" class='alert alert-warning mx-3 my-2' role='alert'>Timetable can't be accessed in mobile version </div>
    
    <?php 
            $username = $_SESSION['username'];
            $sql = "SELECT * FROM `timetable` WHERE `username`='$username'";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
      <div class="tt-container border">
        <div class="tt-schema">
           <div class="tt-schema__item py-2 border px-3">
            LECTURE &#8594; <br>DAY &#8595;
           </div>
           <div class="tt-schema__item py-4 border px-5">FIRST</div>
           <div class="tt-schema__item py-4 border px-5">SECOND</div>
           <div class="tt-schema__item py-4 border px-5">THIRD</div>
           <div class="tt-schema__item py-4 border px-5">FOURTH</div>
           <div class="tt-schema__item py-4 border px-5">FIFTH</div>
           <div class="tt-schema__item py-4 border px-5">SIXTH</div>
           <div class="tt-schema__item py-4 border px-5">SEVENTH</div>
        </div>
        <div class="tt-row">
           <div class="tt-row__item py-4 border px-3 red-bg">
             <?php echo $row["d1"] ?>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c1" value="<?php echo $row["c1"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s1" value="<?php echo $row["s1"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c2" value="<?php echo $row["c2"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s2" value="<?php echo $row["s2"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c3" value="<?php echo $row["c3"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s3" value="<?php echo $row["s3"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c4" value="<?php echo $row["c4"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s4" value="<?php echo $row["s4"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c5" value="<?php echo $row["c5"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s5" value="<?php echo $row["s5"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c6" value="<?php echo $row["c6"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s6" value="<?php echo $row["s6"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c7" value="<?php echo $row["c7"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s7" value="<?php echo $row["s7"] ?>" type="text">
              </div>
            </div>
           </div>
        </div>
        <div class="tt-row">
           <div class="tt-row__item py-4 border px-3 red-bg">
             <?php echo $row["d2"] ?>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c8" value="<?php echo $row["c8"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s8" value="<?php echo $row["s8"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c9" value="<?php echo $row["c9"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s9" value="<?php echo $row["s9"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c10" value="<?php echo $row["c10"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s10" value="<?php echo $row["s10"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c11" value="<?php echo $row["c11"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s11" value="<?php echo $row["s11"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c12" value="<?php echo $row["c12"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s12" value="<?php echo $row["s12"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c13" value="<?php echo $row["c13"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s13" value="<?php echo $row["s13"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c14" value="<?php echo $row["c14"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s14" value="<?php echo $row["s14"] ?>" type="text">
              </div>
            </div>
           </div>
        </div>
        <div class="tt-row">
           <div class="tt-row__item py-4 border px-3 red-bg">
             <?php echo $row["d3"] ?>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c15" value="<?php echo $row["c15"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s15" value="<?php echo $row["s15"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c16" value="<?php echo $row["c16"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s16" value="<?php echo $row["s16"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c17" value="<?php echo $row["c17"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s17" value="<?php echo $row["s17"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c18" value="<?php echo $row["c18"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s18" value="<?php echo $row["s18"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c19" value="<?php echo $row["c19"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s19" value="<?php echo $row["s19"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c20" value="<?php echo $row["c20"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s20" value="<?php echo $row["s20"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c21" value="<?php echo $row["c21"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s21" value="<?php echo $row["s21"] ?>" type="text">
              </div>
            </div>
           </div>
        </div>
        <div class="tt-row">
           <div class="tt-row__item py-4 border px-3 red-bg">
             <?php echo $row["d4"] ?>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c22" value="<?php echo $row["c22"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s22" value="<?php echo $row["s22"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c23" value="<?php echo $row["c23"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s23" value="<?php echo $row["s23"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c24" value="<?php echo $row["c24"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s24" value="<?php echo $row["s24"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c25" value="<?php echo $row["c25"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s25" value="<?php echo $row["s25"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c26" value="<?php echo $row["c26"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s26" value="<?php echo $row["s26"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c27" value="<?php echo $row["c27"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s27" value="<?php echo $row["s27"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c28" value="<?php echo $row["c28"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s28" value="<?php echo $row["s28"] ?>" type="text">
              </div>
            </div>
           </div>
        </div>
        <div class="tt-row">
           <div class="tt-row__item py-4 border px-3 red-bg">
             <?php echo $row["d5"] ?>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c29" value="<?php echo $row["c29"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s29" value="<?php echo $row["s29"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c30" value="<?php echo $row["c30"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s30" value="<?php echo $row["s30"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c31" value="<?php echo $row["c31"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s31" value="<?php echo $row["s31"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c32" value="<?php echo $row["c32"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s32" value="<?php echo $row["s32"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c33" value="<?php echo $row["c33"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s33" value="<?php echo $row["s33"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c34" value="<?php echo $row["c34"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s34" value="<?php echo $row["s34"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c35" value="<?php echo $row["c35"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s35" value="<?php echo $row["s35"] ?>" type="text">
              </div>
            </div>
           </div>
        </div>
        <div class="tt-row">
           <div class="tt-row__item py-4 border px-3 red-bg">
             <?php echo $row["d6"] ?>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c36" value="<?php echo $row["c36"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s36" value="<?php echo $row["s36"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c37" value="<?php echo $row["c37"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s37" value="<?php echo $row["s37"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c38" value="<?php echo $row["c38"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s38" value="<?php echo $row["s38"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c39" value="<?php echo $row["c39"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s39" value="<?php echo $row["s39"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c40" value="<?php echo $row["c40"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s40" value="<?php echo $row["s40"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c41" value="<?php echo $row["c41"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s41" value="<?php echo $row["s41"] ?>" type="text">
              </div>
            </div>
           </div>
           <div class="tt-row__item py-1 border px-2">
            <div class="ui form">
              <div class="tweleve wide field">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="c42" value="<?php echo $row["c42"] ?>" type="text">
                  <input class="py-1 mt-1 tt-input" form="tt-form" name="s42" value="<?php echo $row["s42"] ?>" type="text">
              </div>
            </div>
           </div>
        </div>
      </div>
            <?php } ?>
      <center>
        <button id="tt-btn" class="ui button bg-red my-2 py-3 px-5" type="submit" name="tt_update" value="<?php echo $_SESSION['username'] ?>" form="tt-form">Update Timetable</button>
      </center>
     </div>
<?php include("sidenav-foot.php") ?>
<?php include("footer.php") ?>
