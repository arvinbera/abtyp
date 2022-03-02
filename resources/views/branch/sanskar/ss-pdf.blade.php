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
    <th >SAMAYIK SADHAK
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
    <td class="tg-0lax">Date</td>
    <td class="tg-baqh">{{ $items->ss_date }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items->ss_time }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Venue</td>
    <td class="tg-baqh">{{ $items->ss_venue }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items->ss_in_association }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Jain Samayik Festival</td>
    <td class="tg-baqh">{{ $items->ss_jain_samayik_festival }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Total Participants</td>
    <td class="tg-baqh">{{ $items->ss_total_participants }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Total Number of Samayik Sadhak</td>
    <td class="tg-baqh">{{ $items->ss_total_no_of_samayik_sadhak }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Donation of Samayik Kits</td>
    <td class="tg-baqh">{{ $items->ss_donation_of_samayik_kits }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Conveynor</td>
    <td class="tg-baqh">{{ $items->ss_conveynor }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items->ss_key_member }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Special Thanks To</td>
    <td class="tg-baqh">{{ $items->ss_special_thanks_to }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items->ss_brief_report }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items->ss_prepared_by }}</td>
  </tr>
   
  
  

</table>
<br>
<p align="center">
<input  type="button" value="Print this page" onClick="window.print()" ></p>

</body>
</html>
ss-pdf