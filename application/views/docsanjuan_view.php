<body style="/*background-image: url('../assets/portfolio/images/background.jpg'); */ background-color: turquoise; background-size: 100% 100%; background-attachment: fixed; background-repeat: no-repeat;" onload="makeTableScroll();">
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">DOCTORS
                    <small>San Juan</small>
                </h1>
            </div>
        </div>
                <input type="submit" class="form-control" value="Schedule an appointment" style="width:200px;" /><br/>

        <!-- Related Projects Row -->
        <div class="row table-responsive"" style="background-color: rgba(255,255,255,0.4); ">
               <div class="scrollingTable">
                  <table id="myTable" style="width: 100%; border-collapse: collapse;" class="table">
                    <thead>
                       <th>First Name</th>
                       <th>Last Name</th>
                       <th>Email Address</th>
                       <th>Specialization</th>
                       <th>Facility</th>
                       <th>Schedule</th>
                    </thead>
                    <tbody>
                    <?php
                     foreach ($h->result() as $row)
                     {
                        ?><tr>
                        <td><?php echo $row->fname;?></td>
                        <td><?php echo $row->lname;?></td>
                        <td><?php echo $row->email;?></td>
                        <td><?php echo $row->specialization;?></td>
                        <td><?php echo $row->facility;?></td>
                        <td><?php echo $row->day;?> || <?php echo $row->fromtime;?> - <?php echo $row->totime;?></td>

                        </tr>
                     <?php } ?>
                     </tbody>
                 </table>
               </div>
         </div>
