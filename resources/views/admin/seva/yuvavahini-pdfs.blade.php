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
  @if(!empty($items))
@foreach($items as $item_list)
      @foreach($item_list as $items)

<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >Yuvavahini</th>
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
    <td class="tg-0lax">Date Form</td>
    <td class="tg-baqh">{{ $items->yuva_vahini_date_form }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Date To</td>
    <td class="tg-baqh">{{ $items->yuva_vahini_date_to }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items->yuva_vahini_time }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Number of Days</td>
    <td class="tg-baqh">{{ $items->yuva_vahini_no_Of_days }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Number of Members</td>
    <td class="tg-baqh">{{ $items->yuva_vahini_no_of_members }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Total Distance</td>
    <td class="tg-baqh">{{ $items->yuva_vahini_total_distance }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Number of YV Jackets Collected</td>
    <td class="tg-baqh">{{ $items->yuva_vahini_no_of_yv_jackets_collected }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Availed Abtyp's Accomodation</td>
    <td class="tg-baqh">{{ $items->yuva_vahini_availed_abtyp_accomodation }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Availed Satkar</td>
    <td class="tg-baqh">{{ $items->yuva_vahini_availed_satkar }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items->yuva_vahini_brief_report }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Prepared By<</td>
    <td class="tg-baqh">{{ $items->yuva_vahini_prepared_by }}</td>
   
  </tr> 
 
  

</table>
<div style="page-break-after:always"></div> 

@endforeach
@endforeach
                    @endif

</body>
</html>
