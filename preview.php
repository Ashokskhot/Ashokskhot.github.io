<?php
	 $state = $_POST['state'];
	 $rentType = $_POST['rentType'];
	 $ownerName = $_POST['ownerName'];
	 $ownerRelationship = $_POST['ownerRelationship'];
	 $ownerRelationshipName = $_POST['ownerRelationshipName'];
	 $ownerAddr = $_POST['ownerAddr'];
	 $tenantName = $_POST['tenantName'];
	 $tenantRelationship = $_POST['tenantRelationship'];
	 $tenantRelationshipName = $_POST['tenantRelationshipName'];
	 $tenantAddr = $_POST['tenantAddr'];
	 $tenant2Details = $_POST['tenant2Details'];
	 $rentalPropertyAddr = $_POST['rentalPropertyAddr']; echo "<br>";
	 $monthlyRent = $_POST['monthlyRent'];
	 $securityAmount = $_POST['securityAmount'];
	 $dateOfCommence = $_POST['dateOfCommence'];
	 $durationOfAgreement = $_POST['durationOfAgreement'];
	 $modification = $_POST['modification'];
	 $stampPaperAmount = $_POST['stampPaperAmount'];
	 $scanCopyService = $_POST['scanCopyService'];
	 $totalAmount = $_POST['totalAmount'];
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	.custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
</style>

<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
	    <thead>
	        <tr>
	            <th>Title</th>
	            <th>Value</th>
	        </tr>
	    </thead>
	    <tr>
            <td>State</td>
            <td><?php echo $state; ?></td>
        </tr>
        <tr>
            <td>Rent Type</td>
            <td><?php echo $rentType; ?></td>
        </tr>
        <tr>
            <td>Owner Name</td>
            <td><?php echo $ownerName; ?> <?php echo "<br>" ?> <?php echo $ownerRelationship; ?><?php echo "<br>" ?><?php echo $ownerRelationshipName; ?></td>
        </tr>
        <!-- <tr>
            <td>ownerRelationship</td>
            <td><?php //echo $ownerRelationship; ?></td>
        </tr>
        <tr>
            <td>ownerRelationshipName</td>
            <td><?php //echo $ownerRelationshipName; ?></td>
        </tr> -->
        <tr>
            <td>Owner Address</td>
            <td><?php echo $ownerAddr; ?></td>
        </tr>
        <tr>
            <td>Tenant Name</td>
            <td><?php echo $tenantName; ?> <?php echo "<br>" ?> <?php echo $tenantRelationship; ?><?php echo "<br>" ?><?php echo $tenantRelationshipName; ?></td>
        </tr>
        <!-- <tr>
            <td>tenantRelationship</td>
            <td><?php //echo $tenantRelationship; ?></td>
        </tr>
        <tr>
            <td>tenantRelationshipName</td>
            <td><?php //echo $tenantRelationshipName; ?></td>
        </tr> -->
        <tr>
            <td>Tenant Address</td>
            <td><?php echo $tenantAddr; ?></td>
        </tr>
        <tr>
            <td>Tenant2 Details</td>
            <td><?php echo $tenant2Details; ?></td>
        </tr>
        <tr>
            <td>Rental Property Address</td>
            <td><?php echo $rentalPropertyAddr; ?></td>
        </tr>
        <tr>
            <td>Monthly Rent In Rs. </td>
            <td><?php echo $monthlyRent; ?></td>
        </tr>
        <tr>
            <td>Security Amount In Rs. </td>
            <td><?php echo $securityAmount; ?></td>
        </tr>
        <tr>
            <td>Date Of Commence agreement</td>
            <td><?php echo $dateOfCommence; ?></td>
        </tr>
        <tr>
            <td>Duration of Agreement</td>
            <td><?php echo $durationOfAgreement; ?></td>
        </tr>
        <tr>
            <td>Modification Need</td>
            <td><?php echo $modification; ?></td>
        </tr>
        <tr>
            <td>Stamp Paper Amont</td>
            <td><?php echo $stampPaperAmount; ?></td>
        </tr>
        <tr>
            <td>Scan Copy Service</td>
            <td><?php echo $scanCopyService; ?></td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td><?php echo $totalAmount; ?></td>
        </tr>
    </table>
    </div>	
</div>