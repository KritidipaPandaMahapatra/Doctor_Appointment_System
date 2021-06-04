<?php 
    if(isset($_GET['filter'])){
        $filter = trim($_GET['filter']);
        if(!empty($_GET['filter'])){
            $con = mysqli_connect('localhost','root','','docregistration');
            if($filter == 'All'){
                $stmnt = $con->prepare('select * from `doctor`');
            }else {
                $stmnt = $con->prepare('select * from `doctor` where Fees=?');
                $stmnt->bind_param('s',$filter);
            };
            $stmnt->execute();
            $stmnt->store_result();
            $stmnt->bind_result($id,$dname,$dcategory,$dphone,$demail,$dfees);
            $final = array();
            while($stmnt->fetch()){
                $each = array(
                    'id'=>$id,
                    'dname'=>$dname,
                    'dcategory'=>$dcategory,
                    'dphone'=>$dphone,
                    'demail'=>$demail,
                    'dfees'=>$dfees
                );
                array_push($final,$each);
            };
            echo json_encode($final);
            $stmnt->close();
            $con->close();
        };
    };
?>