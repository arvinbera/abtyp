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
    <th >Fit Yuva

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
    <td class="tg-baqh">{{ $items->fit_yuva_date }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items->fit_yuva_time }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Venue</td>
    <td class="tg-baqh">{{ $items->fit_yuva_venue }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items->fit_yuva_in_association }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Event</td>
    <td class="tg-baqh">{{ $items->fit_yuva_event }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Number Of participants</td>
    <td class="tg-baqh">{{ $items->fit_yuva_no_of_participants }}</td>
   
  </tr>
   
   <tr>
    <td class="tg-0lax">Convenors</td>
    <td class="tg-baqh">{{ $items->fit_yuva_convenors }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items->fit_yuva_key_members }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Sponsors</td>
    <td class="tg-baqh">{{ $items->fit_yuva_sponsors }}</td>
  </tr>
   <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items->fit_yuva_brief_report }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Chaitra Aatma</td>
    <td class="tg-baqh">{{ $items->fit_yuva_chaitrs_aatma }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">ABTYP Members</td>
    <td class="tg-baqh">{{ $items->fit_yuva_abtyp_members }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Chief Guest</td>
    <td class="tg-baqh">{{ $items->fit_yuva_chief_guest }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Guests</td>
    <td class="tg-baqh">{{ $items->fit_yuva_guest }}</td>
  </tr>
  <tr>
    <td class="tg-0lax">Total</td>
    <td class="tg-baqh">{{ $items->fit_yuva_total }}</td>
  </tr>
  <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items->fit_yuva_prepared_by }}</td>
  </tr>
   
  
  

</table>
<div style="page-break-after:always"></div> 
@endforeach
@endforeach
                    @endif


</body>
</html>
