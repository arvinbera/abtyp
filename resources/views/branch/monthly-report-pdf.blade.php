

<!DOCTYPE html>
<html>
<head>
            <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/adminassets')}}/dist/img/logotest.png"/>

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


    
 @if ($branchh->name=='ATDC') 
<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >ATDC</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items1->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{$branchh->name }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items1->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Total Amount of Billing</td>
    <td class="tg-baqh">{{ $items1->total_no_of_billing }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Total Number of Pathology Patients</td>
    <td class="tg-baqh">{{ $items1->total_no_of_pathology_patients }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Number of Dental Patients</td>
    <td class="tg-baqh">{{ $items1->no_of_dental_patients }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Number of X-ray Patients</td>
    <td class="tg-baqh">{{ $items1->no_of_x_ray_patients }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Number of Sonography Patients</td>
    <td class="tg-baqh">{{ $items1->no_of_sonography_patients }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Number of OPD Patients</td>
    <td class="tg-baqh">{{ $items1->no_of_opd_patients }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Total Amount of Inventory Used</td>
    <td class="tg-baqh">{{ $items1->total_no_of_inventory_used }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Any Special Donation of the Month</td>
    <td class="tg-baqh">{{ $items1->special_donation }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Special Activity Or Camp</td>
    <td class="tg-baqh">{{ $items1->special_activity }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Any Change in Machinery</td>
    <td class="tg-baqh">{{ $items1->chnage_in_machinery }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items1->atdc_key_members }}</td>
   
  </tr> 
  <tr>
    <td class="tg-0lax">Brief Reporting</td>
    <td class="tg-baqh">{{ $items1->brief_reporting }}</td>
   
  </tr> 
  <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items1->atdc_prepared_by }}</td>
   
  </tr>
  

</table>
<div style="page-break-before:always">&nbsp;</div> 
   @endif
 @if ($branchh->name=='MBDD') 
<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >MBDD</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items2->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items2->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items2->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Number of Camps</td>
    <td class="tg-baqh">{{ $items2->name_of_camps }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Date</td>
    <td class="tg-baqh">{{ $items2->date }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items2->time }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Venue</td>
    <td class="tg-baqh">{{ $items2->venue }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Name of Blood Bank</td>
    <td class="tg-baqh">{{ $items2->name_of_blood_bank }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items2->in_association }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Total Units Collected</td>
    <td class="tg-baqh">{{ $items2->total_units_collected }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Camp Convenors</td>
    <td class="tg-baqh">{{ $items2->camp_convenors }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items2->key_members }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Sponsors</td>
    <td class="tg-baqh">{{ $items2->sponsors }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Special Thanks To</td>
    <td class="tg-baqh">{{ $items2->special_thatnks_to }}</td>
   
  </tr> 
  <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items2->brief_reports }}</td>
   
  </tr> 
  <tr>
    <td class="tg-0lax">Chaitra Aatma</td>
    <td class="tg-baqh">{{ $items2->chaitra_aatma }}</td>
   
  </tr>
  
   <tr>
    <td class="tg-0lax">ABTYP Members</td>
    <td class="tg-baqh">{{ $items2->abtyp_members }}</td>
   
  </tr>
  
   <tr>
    <td class="tg-0lax">Chief Guest</td>
    <td class="tg-baqh">{{ $items2->chief_guest }}</td>
   
  </tr>
  
   <tr>
    <td class="tg-0lax">Guests</td>
    <td class="tg-baqh">{{ $items2->guests }}</td>
   
  </tr>
  
     <tr>
    <td class="tg-0lax">Total</td>
    <td class="tg-baqh">{{ $items2->total }}</td>
   
  </tr>   <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items2->mbdd_prepared_by }}</td>
   
  </tr>
  

</table>
<div style="page-break-before:always">&nbsp;</div> 
  @endif
 @if ($branchh->name=='TTF') 
<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >TTF</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items3->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items3->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items3->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Date</td>
    <td class="tg-baqh">{{ $items3->ttf_date }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items3->ttf_time }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Venue</td>
    <td class="tg-baqh">{{ $items3->ttf_venue }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items3->ttf_in_associati }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Number Of participants</td>
    <td class="tg-baqh">{{ $items3->ttf_number_Of_participants }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">NDRF Trainer's Name</td>
    <td class="tg-baqh">{{ $items3->ttf_ndrf_trainer_ame }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Stage</td>
    <td class="tg-baqh">{{ $items3->ttf_stage }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Convenors</td>
    <td class="tg-baqh">{{ $items3->ttf_convenors }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items3->ttf_key_members }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Sponsors</td>
    <td class="tg-baqh">{{ $items3->ttf_sponsors }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Special Thanks To</td>
    <td class="tg-baqh">{{ $items3->ttf_special_thanks_to }}</td>
   
  </tr> 
  <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items3->ttf_brief_reports }}</td>
   
  </tr> 
  <tr>
    <td class="tg-0lax">Chaitra Aatma</td>
    <td class="tg-baqh">{{ $items3->ttf_chaitra_aatma }}</td>
   
  </tr>
  
  <tr>
    <td class="tg-0lax">ABTYP Members</td>
    <td class="tg-baqh">{{ $items3->ttf_abtyp_members }}</td>
   
  </tr>
  
  <tr>
    <td class="tg-0lax">Chief Guest</td>
    <td class="tg-baqh">{{ $items3->ttf_chief_guest }}</td>
   
  </tr>
  
  <tr>
    <td class="tg-0lax">Guests</td>
    <td class="tg-baqh">{{ $items3->ttf_guests }}</td>
   
  </tr>
  
    <tr>
    <td class="tg-0lax">Total</td>
    <td class="tg-baqh">{{ $items3->ttf_total }}</td>
   
  </tr>
  
    <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items3->ttf_prepared_by }}</td>
   
  </tr>
  

</table>
<div style="page-break-before:always">&nbsp;</div> 
@endif
 @if ($branchh->name=='YuvaVahini') 
<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >Yuvavahini</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items4->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items4->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items4->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Date Form</td>
    <td class="tg-baqh">{{ $items4->yuva_vahini_date_form }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Date To</td>
    <td class="tg-baqh">{{ $items4->yuva_vahini_date_to }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items4->yuva_vahini_time }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Number of Days</td>
    <td class="tg-baqh">{{ $items4->yuva_vahini_no_Of_days }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Number of Members</td>
    <td class="tg-baqh">{{ $items4->yuva_vahini_no_of_members }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Total Distance</td>
    <td class="tg-baqh">{{ $items4->yuva_vahini_total_distance }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Number of YV Jackets Collected</td>
    <td class="tg-baqh">{{ $items4->yuva_vahini_no_of_yv_jackets_collected }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Availed Abtyp's Accomodation</td>
    <td class="tg-baqh">{{ $items4->yuva_vahini_availed_abtyp_accomodation }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Availed Satkar</td>
    <td class="tg-baqh">{{ $items4->yuva_vahini_availed_satkar }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items4->yuva_vahini_brief_report }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Prepared By<</td>
    <td class="tg-baqh">{{ $items4->yuva_vahini_prepared_by }}</td>
   
  </tr> 
 
  

</table>
<div style="page-break-before:always">&nbsp;</div> 
@endif
 @if ($branchh->name=='EyeDonation') 



<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >Eye Donation</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items5->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items5->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items5->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Number of Eye Donation</td>
    <td class="tg-baqh">{{ $items5->eye_donate_no_of_eye_donation }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Number of Eye Bank</td>
    <td class="tg-baqh">{{ $items5->eye_donate_no_ofeye_bank }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items5->eye_donate_kry_members }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Special Thanks To</td>
    <td class="tg-baqh">{{ $items5->eye_donate_special_thanks_to }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items5->eye_donate_brief_report }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items5->eye_donate_prepared_by }}</td>
   
  </tr>
   
  

</table>
<div style="page-break-before:always">&nbsp;</div> 
@endif
 @if ($branchh->name=='AMPK') 
<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >AMPK</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items6->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items6->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items6->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Address</td>
    <td class="tg-baqh">{{ $items6->ampk_address }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items6->ampk_in_association }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Chaitra Aatma's Visited</td>
    <td class="tg-baqh">{{ $items6->ampk_chaitra_atma_visited }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Date</td>
    <td class="tg-baqh">{{ $items6->ampk_date }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Conveynor</td>
    <td class="tg-baqh">{{ $items6->ampk_conveynor }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items6->ampk_key_members }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Sponsors</td>
    <td class="tg-baqh">{{ $items6->ampk_sponsors }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Special Thanks To</td>
    <td class="tg-baqh">{{ $items6->ampk_special_thanks_to }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items6->ampk_brief_report }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items6->ampk_prepared_by }}</td>
   
  
  

</table>
<div style="page-break-before:always">&nbsp;</div> 
@endif
 @if ($branchh->name=='ChokaSatkar') 
<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >Chokasatar</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items7->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items7->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items7->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Date Form</td>
    <td class="tg-baqh">{{ $items7->choka_satkar_date_form }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Date To</td>
    <td class="tg-baqh">{{ $items7->choka_satkar_date_to }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items7->choka_satkar_time }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Number of Days</td>
    <td class="tg-baqh">{{ $items7->choka_satkar_no_of_days }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Amount Paid</td>
    <td class="tg-baqh">{{ $items7->choka_satkar_amount_paid }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Sponsor</td>
    <td class="tg-baqh">{{ $items7->choka_satkar_sponsor }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items7->choka_satkar_in_association }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Special Thanks To</td>
    <td class="tg-baqh">{{ $items7->choka_satkar_special_thanks_to }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items7->choka_satkar_brief_reports }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items7->choka_satkarprepared_by }}</td>
   
  </tr>
   
  

</table>
<div style="page-break-before:always">&nbsp;</div> 
@endif
 @if ($branchh->name=='JainSanskarVidhi') 
<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >JAIN SANSKAR VIDHI</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items8->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items8->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items8->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  
 <tr>
    <td class="tg-0lax">Date</td>
    <td class="tg-baqh">{{ $items8->jsv_date }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items8->jsv_time }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Venue</td>
    <td class="tg-baqh">{{ $items8->jsv_venue }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items8->jsv_in_association }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Sanskar's Name</td>
    <td class="tg-baqh">{{ $items8->jsv_sanskar_name }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Number Of participants</td>
    <td class="tg-baqh">{{ $items8->jsv_no_of_participant }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Convenors</td>
    <td class="tg-baqh">{{ $items8->jsv_convenors }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items8->jsv_key_member }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Sponsors</td>
    <td class="tg-baqh">{{ $items8->jsv_sponsors }}</td>
  </tr>

  </tr>
   <tr>
    <td class="tg-0lax">Special Thanks To</td>
    <td class="tg-baqh">{{ $items8->jsv_specila_thanks_to }}</td>
  </tr>


  </tr>
   <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items8->jsv_brief_report }}</td>
  </tr>


  </tr>
   <tr>
    <td class="tg-0lax">Chaitra Aatma</td>
    <td class="tg-baqh">{{ $items8->jsv_chaitra_aatma }}</td>
  </tr>

  </tr>
   <tr>
    <td class="tg-0lax">ABTYP Members</td>
    <td class="tg-baqh">{{ $items8->jsv_abtyp_members }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Chief Guest</td>
    <td class="tg-baqh">{{ $items8->jsv_chief_guest }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Guests</td>
    <td class="tg-baqh">{{ $items8->jsv_guest }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Total</td>
    <td class="tg-baqh">{{ $items8->jsv_total }}</td>
  </tr>
   <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items8->jsv_prepared_by }}</td>
  </tr>
   
  
  

</table>
<div style="page-break-before:always">&nbsp;</div> 
@endif
 @if ($branchh->name=='SamayikSadhak') 
<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >SAMAYIK SADHAK
</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items9->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items9->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items9->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
 <tr>
    <td class="tg-0lax">Date</td>
    <td class="tg-baqh">{{ $items9->ss_date }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items9->ss_time }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Venue</td>
    <td class="tg-baqh">{{ $items9->ss_venue }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items9->ss_in_association }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Jain Samayik Festival</td>
    <td class="tg-baqh">{{ $items9->ss_jain_samayik_festival }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Total Participants</td>
    <td class="tg-baqh">{{ $items9->ss_total_participants }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Total Number of Samayik Sadhak</td>
    <td class="tg-baqh">{{ $items9->ss_total_no_of_samayik_sadhak }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Donation of Samayik Kits</td>
    <td class="tg-baqh">{{ $items9->ss_donation_of_samayik_kits }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Conveynor</td>
    <td class="tg-baqh">{{ $items9->ss_conveynor }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items9->ss_key_member }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Special Thanks To</td>
    <td class="tg-baqh">{{ $items9->ss_special_thanks_to }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items9->ss_brief_report }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items9->ss_prepared_by }}</td>
  </tr>
   
  
  

</table>
<div style="page-break-before:always">&nbsp;</div> 
@endif
 @if ($branchh->name=='Tapoyagya') 
<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >TAPOYAGYA</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items10->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items10->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items10->monthly_report_month)); echo $newDateFormat2; ?></td>
   
 <tr>
    <td class="tg-0lax">Date</td>
    <td class="tg-baqh">{{ $items10->tapoyaga_date }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items10->tapoyaga_time }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Venue</td>
    <td class="tg-baqh">{{ $items10->tapoyaga_venue }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items10->tapoyaga_in_association }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Conveynor</td>
    <td class="tg-baqh">{{ $items10->tapoyaga_conveynor }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items10->tapoyaga_key_member }}</td>
   
  </tr>
   
   <tr>
    <td class="tg-0lax">Special Thanks To</td>
    <td class="tg-baqh">{{ $items10->tapoyaga_special_thanks }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items10->tapoyaga_brief_report }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items10->tapoyaga_prepared_by }}</td>
   
  
  

</table>
<div style="page-break-before:always">&nbsp;</div> 
@endif
 @if ($branchh->name=='CPS') 


<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >CPS
</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items11->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items11->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items11->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Date</td>
    <td class="tg-baqh">{{ $items11->cps_date }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items11->cps_time }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Venue</td>
    <td class="tg-baqh">{{ $items11->cps_venue }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items11->cps_in_association }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Chaitra Aatma</td>
    <td class="tg-baqh">{{ $items11->cps_chaitra_aatma }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">ABTYP Members</td>
    <td class="tg-baqh">{{ $items11->cps_abtyp_members }}</td>
   
  </tr>
   
   <tr>
    <td class="tg-0lax">Chief Guest</td>
    <td class="tg-baqh">{{ $items11->cps_chief_guest }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Guests</td>
    <td class="tg-baqh">{{ $items11->cps_guest }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Total Presence</td>
    <td class="tg-baqh">{{ $items11->cps_total_presesnt }}</td>
  </tr>
   <tr>
    <td class="tg-0lax">Conveynor</td>
    <td class="tg-baqh">{{ $items11->cps_conveynor }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items11->cps_key_member }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Sponsors</td>
    <td class="tg-baqh">{{ $items11->cps_sponcer }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Special Thanks</td>
    <td class="tg-baqh">{{ $items11->cps_special_thanks }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items11->cps_brief_report }}</td>
  </tr>
  <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items11->cps_prepared_by }}</td>
  </tr>
   
  
  

</table>
<div style="page-break-before:always">&nbsp;</div> 
@endif
 @if ($branchh->name=='PD') 
<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >PD
</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items12->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items12->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items12->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Date</td>
    <td class="tg-baqh">{{ $items12->pd_date }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items12->pd_time }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Venue</td>
    <td class="tg-baqh">{{ $items12->pd_venue }}</td>
   
  </tr>





  <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items12->pd_in_association }}</td>
   
  </tr>

    <tr>
    <td class="tg-0lax">Teacher's Name</td>
    <td class="tg-baqh">{{ $items12->pd_teachers_name }}</td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Number Of participants</td>
    <td class="tg-baqh">{{ $items12->pd_no_of_participants }}</td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Conveynor</td>
    <td class="tg-baqh">{{ $items12->pd_convenors }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items12->pd_kry_member }}</td>
  </tr>
  <tr>
    <td class="tg-0lax">Sponsors</td>
    <td class="tg-baqh">{{ $items12->pd_sponsors }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Special Thanks</td>
    <td class="tg-baqh">{{ $items12->pd_special_thanks_to }}</td>
  </tr>

  <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items12->pd_brief_report }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Chaitra Aatma</td>
    <td class="tg-baqh">{{ $items12->pd_chaitra_aatma }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">ABTYP Members</td>
    <td class="tg-baqh">{{ $items12->pd_abtyp_members }}</td>
   
  </tr>
   
   <tr>
    <td class="tg-0lax">Chief Guest</td>
    <td class="tg-baqh">{{ $items12->pd_chief_guest }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Guests</td>
    <td class="tg-baqh">{{ $items12->pd_guest }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Total Presence</td>
    <td class="tg-baqh">{{ $items12->pd_total }}</td>
  </tr>
   

  

   

  
  <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items12->pd_prepared_by }}</td>
  </tr>
   
  
  

</table>
<div style="page-break-before:always">&nbsp;</div>
@endif
 @if ($branchh->name=='BarahVrat') 

<table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >BARAH VRAT</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items13->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items13->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items13->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Address</td>
    <td class="tg-baqh">{{ $items13->address }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Date</td>
    <td class="tg-baqh">{{ $items13->bv_date }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items13->bv_time }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Venue</td>
    <td class="tg-baqh">{{ $items13->bv_venue }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items13->bv_in_association }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Sanskar's Name</td>
    <td class="tg-baqh">{{ $items13->bv_sanskar_name }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Number Of participants</td>
    <td class="tg-baqh">{{ $items13->bv_no_of_participant }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Convenors</td>
    <td class="tg-baqh">{{ $items13->bv_convenors }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items13->bv_key_members }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Sponsors</td>
    <td class="tg-baqh">{{ $items13->bv_sponsors }}</td>
  </tr>

  </tr>
   <tr>
    <td class="tg-0lax">Special Thanks To</td>
    <td class="tg-baqh">{{ $items13->bv_special_thanks_to }}</td>
  </tr>


  </tr>
   <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items13->bv_brief_report }}</td>
  </tr>


  </tr>
   <tr>
    <td class="tg-0lax">Chaitra Aatma</td>
    <td class="tg-baqh">{{ $items13->bv_chaitra_aatma }}</td>
  </tr>

  </tr>
   <tr>
    <td class="tg-0lax">ABTYP Members</td>
    <td class="tg-baqh">{{ $items13->bv_abtyp_members }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Chief Guest</td>
    <td class="tg-baqh">{{ $items13->bv_chief_guest }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Guests</td>
    <td class="tg-baqh">{{ $items13->bv_guets }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Total</td>
    <td class="tg-baqh">{{ $items13->bv_total }}</td>
  </tr>
   <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items13->bv_prepared_by }}</td>
  </tr>
   
   
  
  

</table>
<div style="page-break-before:always">&nbsp;</div> <table id="customers">
    @endif
 @if ($branchh->name=='JainVidhyaKatyashal') 

  <table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >JAIN VIDHYA KATYASHALA</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items15->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items15->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items15->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Date</td>
    <td class="tg-baqh">{{ $items15->jvk_date }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items15->jvk_time }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Venue</td>
    <td class="tg-baqh">{{ $items15->jvk_venue }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items15->jvk_in_association }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Teacher's Name</td>
    <td class="tg-baqh">{{ $items15->jvk_teachers_name }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Number Of participants</td>
    <td class="tg-baqh">{{ $items15->jvk_no_of_participants }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Convenors</td>
    <td class="tg-baqh">{{ $items15->jvk_convenors }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items15->jvk_key_members }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Sponsors</td>
    <td class="tg-baqh">{{ $items15->jvk_sponsor }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Special Thanks To</td>
    <td class="tg-baqh">{{ $items15->jvk_special_thanks_to }}</td>
  </tr>

  <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items15->jvk_brief_report }}</td>
  </tr>

  <tr>
    <td class="tg-0lax">Chaitra Aatma</td>
    <td class="tg-baqh">{{ $items15->jvk_chaitra_aatma }}</td>
  </tr>


  <tr>
    <td class="tg-0lax">ABTYP Members</td>
    <td class="tg-baqh">{{ $items15->jvk_abtyp_members }}</td>
  </tr>

  <tr>
    <td class="tg-0lax">Chief Guest</td>
    <td class="tg-baqh">{{ $items15->jvk_chief_guest }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Guests</td>
    <td class="tg-baqh">{{ $items15->jvk_guest }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Total</td>
    <td class="tg-baqh">{{ $items15->jvk_total }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items15->jvk_prepared_by }}</td>
  </tr>
   
  
  

</table>
<div style="page-break-before:always">&nbsp;</div> <table id="customers">
        @endif
 @if ($branchh->name=='YuvaDivas') 
  <table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >YUVA DIVAS
</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items16->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items16->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items16->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Date</td>
    <td class="tg-baqh">{{ $items16->yd_date }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items16->yd_time }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Venue</td>
    <td class="tg-baqh">{{ $items16->yd_venue }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items16->yd_in_association }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">TOPIC</td>
    <td class="tg-baqh">{{ $items16->yd_topic }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">NUMBER OF PARTICIPANTS:</td>
    <td class="tg-baqh">{{ $items16->yd_no_of_participants }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">CONVENORS</td>
    <td class="tg-baqh">{{ $items16->yd_convenors }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">KEY MEMBERS</td>
    <td class="tg-baqh">{{ $items16->yd_key_members }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">SPONSORS</td>
    <td class="tg-baqh">{{ $items16->yd_sponsors }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">SPECIAL THANKS TO:</td>
    <td class="tg-baqh">{{ $items16->yd_special_thanks_to }}</td>
  </tr>

  <tr>
    <td class="tg-0lax">BREIF REPORT</td>
    <td class="tg-baqh">{{ $items16->yd_brief_reports }}</td>
  </tr>

  <tr>
    <td class="tg-0lax">Note</td>
    <td class="tg-baqh">{{ $items16->yd_note }}</td>
  </tr>
   
  
  

</table>
<div style="page-break-before:always">&nbsp;</div> <table id="customers">
            @endif
 @if ($branchh->name=='TKM') 
  <table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >TKM
</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items17->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items17->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items17->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Date</td>
    <td class="tg-baqh">{{ $items17->tkm_name }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items17->tkm_time }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Venue</td>
    <td class="tg-baqh">{{ $items17->tkm_venue }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items17->tkm_in_association }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Number Of participants</td>
    <td class="tg-baqh">{{ $items17->tkm_no_of_participants }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Convenors</td>
    <td class="tg-baqh">{{ $items17->tkm_convenors }}</td>
   
  </tr>
   
   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items17->tkm_key_members }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Sponsors</td>
    <td class="tg-baqh">{{ $items17->tkm_sponsors }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Special Thanks To</td>
    <td class="tg-baqh">{{ $items17->tkm_special_thanks_to }}</td>
  </tr>
   <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items17->tkm_brief_report }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Chaitra Aatma</td>
    <td class="tg-baqh">{{ $items17->tkm_chaitra_aatma }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">ABTYP Members</td>
    <td class="tg-baqh">{{ $items17->tkm_abtyp_members }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Chief Guest</td>
    <td class="tg-baqh">{{ $items17->tkm_chief_guest }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Guests</td>
    <td class="tg-baqh">{{ $items17->tkm_guest }}</td>
  </tr>
  <tr>
    <td class="tg-0lax">Total</td>
    <td class="tg-baqh">{{ $items17->tkm_total }}</td>
  </tr>
  <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items17->tkm_prepared_by }}</td>
  </tr>
   
  
  

</table>
<div style="page-break-before:always">&nbsp;</div> <table id="customers">
               @endif
 @if ($branchh->name=='YuvaSangam') 
  <table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >YUVA SANGAM
</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items18->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items18->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items18->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Number of New Members</td>
    <td class="tg-baqh">{{ $items18->ys_no_new_members }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Conveynor</td>
    <td class="tg-baqh">{{ $items18->ys_conveynor }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Special Thanks To</td>
    <td class="tg-baqh">{{ $items18->ys_special_thanks_to }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items18->ys_brief_reports }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items18->ys_prepared_by }}</td>
   
  </tr>
  

  
  

</table>
<div style="page-break-before:always">&nbsp;</div> <table id="customers">
                   @endif
 @if ($branchh->name=='FitYuva')
  <table id="customers">
    <tr>
       

    <td colspan="2" style="text-align: center;"><img src="http://abtyp.in/monthly_report/public/adminassets/dist/img/logotest.png" alt="" border=0 height=100 width=100  class="png"></img><br><font size="4"><b>Monthly Report</b></font></td>
   
     
    
  </tr>
  <thead>
    
  <tr>
    <th >Fit Yuva

</th>
    <th ><?php $newDateFormat2 = date('M/Y', strtotime($items19->monthly_report_month)); echo $newDateFormat2; ?></th>
    
  </tr>
</thead>
<tbody>
       
  <tr>
    <td class="tg-0lax">Parishad Name</td>
   
    <td class="tg-baqh">{{ $items19->address }}</td>
    

  </tr>
    
  <tr>
    <td class="tg-0lax">Month</td>
    <td class="tg-baqh"><?php $newDateFormat2 = date('M/Y', strtotime($items19->monthly_report_month)); echo $newDateFormat2; ?></td>
   
  </tr>
  <tr>
    <td class="tg-0lax">Date</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_date }}</td>
   
  </tr>


  <tr>
    <td class="tg-0lax">Time</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_time }}</td>
   
  </tr>

   <tr>
    <td class="tg-0lax">Venue</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_venue }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">In Association(if any)</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_in_association }}</td>
   
  </tr>



  <tr>
    <td class="tg-0lax">Event</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_event }}</td>
   
  </tr>
  

   <tr>
    <td class="tg-0lax">Number Of participants</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_no_of_participants }}</td>
   
  </tr>
   
   <tr>
    <td class="tg-0lax">Convenors</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_convenors }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Key Members</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_key_members }}</td>
   
  </tr>
   <tr>
    <td class="tg-0lax">Sponsors</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_sponsors }}</td>
  </tr>
   <tr>
    <td class="tg-0lax">Brief Report</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_brief_report }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Chaitra Aatma</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_chaitrs_aatma }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">ABTYP Members</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_abtyp_members }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Chief Guest</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_chief_guest }}</td>
  </tr>

   <tr>
    <td class="tg-0lax">Guests</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_guest }}</td>
  </tr>
  <tr>
    <td class="tg-0lax">Total</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_total }}</td>
  </tr>
  <tr>
    <td class="tg-0lax">Prepared By</td>
    <td class="tg-baqh">{{ $items19->fit_yuva_prepared_by }}</td>
  </tr>
   
  
  

</table>
 @endif
<br>
<p align="center">
<input  type="button" value="Print this page" onClick="window.print()" ></p>



</body>
</html>
