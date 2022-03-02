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
       

    <td colspan="2" style="text-align: center;"><img src="https://abtyp.org/public/website/images/TYP-red.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >YUVA SANGAM
</th>
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
    <td class="tg-0lax">Number of New Members</td>
    <td class="tg-baqh">{{ $items->ys_no_new_members }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Conveynor</td>
    <td class="tg-baqh">{{ $items->ys_conveynor }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Special Thanks To</td>
    <td class="tg-baqh">{{ $items->ys_special_thanks_to }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items->ys_brief_reports }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items->ys_prepared_by }}</td>
   
  </tr>
  

  
  

</table>

<br>
<p align="center">
<input  type="button" value="Print this page" onClick="window.print()" ></p>

</body>
</html>
