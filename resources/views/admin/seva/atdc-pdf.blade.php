<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: red;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >ATDC</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Total Amount of Billing</td>
    <td class="tg-baqh">{{ $items->total_no_of_billing }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Total Number of Pathology Patients</td>
    <td class="tg-baqh">{{ $items->total_no_of_pathology_patients }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Number of Dental Patients</td>
    <td class="tg-baqh">{{ $items->no_of_dental_patients }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Number of X-ray Patients</td>
    <td class="tg-baqh">{{ $items->no_of_x_ray_patients }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Number of Sonography Patients</td>
    <td class="tg-baqh">{{ $items->no_of_sonography_patients }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Number of OPD Patients</td>
    <td class="tg-baqh">{{ $items->no_of_opd_patients }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Total Amount of Inventory Used</td>
    <td class="tg-baqh">{{ $items->total_no_of_inventory_used }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Any Special Donation of the Month</td>
    <td class="tg-baqh">{{ $items->special_donation }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Special Activity Or Camp</td>
    <td class="tg-baqh">{{ $items->special_activity }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Any Change in Machinery</td>
    <td class="tg-baqh">{{ $items->chnage_in_machinery }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items->atdc_key_members }}</td>
   
  </tr> 
  <tr>
    <td class="tg-0lax">Brief Reporting</td>
    <td class="tg-baqh">{{ $items->brief_reporting }}</td>
   
  </tr> 
  <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items->atdc_prepared_by }}</td>
   
  </tr>
  

</table>
<br>
<p align="center">
<input  type="button" value="Print this page" onClick="window.print()" ></p>

</body>
</html>
