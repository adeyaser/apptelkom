<?php
	header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=tes.xls");
   include "../koneksi.php";
   $result_=mysqli_query($koneksi,"SELECT ST.IDSTO,ST.NAMASTO,ST.LOKASI,WS.NAMAWITEL,WS.ALAMATWITEL,PR.* FROM PROJECT PR LEFT JOIN STO ST ON ST.NOURUT = PR.NOURUTSTO LEFT JOIN WITEL WS ON WS.IDWITEL =PR.IDWITEL $WHERE");
?>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 12 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:"Segoe UI";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0mm;
	margin-right:0mm;
	margin-bottom:10.0pt;
	margin-left:0mm;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
h1
	{margin-top:10.0pt;
	margin-right:0mm;
	margin-bottom:0mm;
	margin-left:0mm;
	margin-bottom:.0001pt;
	font-size:15.0pt;
	font-family:"Calibri","sans-serif";
	color:#17365D;
	font-weight:bold;}
h2
	{margin-top:10.0pt;
	margin-right:0mm;
	margin-bottom:0mm;
	margin-left:0mm;
	margin-bottom:.0001pt;
	font-size:13.0pt;
	font-family:"Calibri","sans-serif";
	color:#17365D;
	font-weight:bold;}
h3
	{margin-top:10.0pt;
	margin-right:0mm;
	margin-bottom:0mm;
	margin-left:0mm;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	color:#17365D;
	font-weight:bold;}
h4
	{margin-top:10.0pt;
	margin-right:0mm;
	margin-bottom:0mm;
	margin-left:0mm;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	color:#17365D;
	font-weight:normal;}
h5
	{margin-top:10.0pt;
	margin-right:0mm;
	margin-bottom:0mm;
	margin-left:0mm;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	color:#17365D;
	font-weight:normal;
	font-style:italic;}
h6
	{margin-top:10.0pt;
	margin-right:0mm;
	margin-bottom:0mm;
	margin-left:0mm;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:"Calibri","sans-serif";
	color:#17365D;
	font-weight:bold;}
p
	{margin-top:0mm;
	margin-right:0mm;
	margin-bottom:10.0pt;
	margin-left:0mm;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Balloon Text Char";
	margin:0mm;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";}
span.MsoPlaceholderText
	{color:gray;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0mm;
	margin-right:0mm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{margin-top:0mm;
	margin-right:0mm;
	margin-bottom:0mm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{margin-top:0mm;
	margin-right:0mm;
	margin-bottom:0mm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{margin-top:0mm;
	margin-right:0mm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoQuote, li.MsoQuote, div.MsoQuote
	{margin-top:0mm;
	margin-right:36.0pt;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	color:black;}
p.Publishwithline, li.Publishwithline, div.Publishwithline
	{mso-style-name:"Publish with line";
	margin:0mm;
	margin-bottom:.0001pt;
	font-size:16.0pt;
	font-family:"Calibri","sans-serif";
	color:#17365D;
	font-weight:bold;}
p.PublishStatus, li.PublishStatus, div.PublishStatus
	{mso-style-name:"Publish Status";
	margin-top:6.0pt;
	margin-right:0mm;
	margin-bottom:2.0pt;
	margin-left:0mm;
	background:#FDEB9F;
	border:none;
	padding:0mm;
	font-size:9.0pt;
	font-family:"Calibri","sans-serif";}
p.PublishStatusAccessible, li.PublishStatusAccessible, div.PublishStatusAccessible
	{mso-style-name:PublishStatus_Accessible;
	margin-top:6.0pt;
	margin-right:0mm;
	margin-bottom:2.0pt;
	margin-left:0mm;
	border:none;
	padding:0mm;
	font-size:9.0pt;
	font-family:"Calibri","sans-serif";}
p.Account, li.Account, div.Account
	{mso-style-name:Account;
	margin:0mm;
	margin-bottom:.0001pt;
	font-size:9.0pt;
	font-family:"Segoe UI","sans-serif";
	color:#4F81BD;}
p.Categories, li.Categories, div.Categories
	{mso-style-name:Categories;
	margin:0mm;
	margin-bottom:.0001pt;
	font-size:9.0pt;
	font-family:"Segoe UI","sans-serif";
	color:#4F81BD;}
p.PadderBetweenTitleandProperties, li.PadderBetweenTitleandProperties, div.PadderBetweenTitleandProperties
	{mso-style-name:"Padder Between Title and Properties";
	margin-top:0mm;
	margin-right:0mm;
	margin-bottom:1.0pt;
	margin-left:0mm;
	font-size:1.0pt;
	font-family:"Calibri","sans-serif";}
p.PadderBetweenControlandBody, li.PadderBetweenControlandBody, div.PadderBetweenControlandBody
	{mso-style-name:"Padder Between Control and Body";
	margin-top:0mm;
	margin-right:0mm;
	margin-bottom:6.0pt;
	margin-left:0mm;
	font-size:1.0pt;
	font-family:"Calibri","sans-serif";}
p.underline, li.underline, div.underline
	{mso-style-name:underline;
	margin-top:2.0pt;
	margin-right:0mm;
	margin-bottom:0mm;
	margin-left:0mm;
	margin-bottom:.0001pt;
	border:none;
	padding:0mm;
	font-size:1.0pt;
	font-family:"Calibri","sans-serif";}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-link:"Balloon Text";
	font-family:"Tahoma","sans-serif";}
.MsoPapDefault
	{margin-bottom:10.0pt;}
@page Section1
	{size:612.0pt 792.0pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;}
div.Section1
	{page:Section1;}
-->
</style>

</head>

<body lang=IN>

<div class=Section1>

<p class=Publishwithline><span class=MsoPlaceholderText>LAPORAN HASIL MONITORING</span></p>

<div style='border:none;border-bottom:solid #4F81BD 1.0pt;padding:0mm 0mm 2.0pt 0mm'>

<p class=underline>&nbsp;</p>

</div>

<p class=PadderBetweenControlandBody>&nbsp;</p>
 <div class="card-body">
 <div class="table-responsive">
<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=1719
 style='width:1289.15pt;margin-left:4.65pt;border-collapse:collapse'>
 <tr style='height:15.75pt'>
  <td width=103 nowrap rowspan=2 style='width:77.0pt;border:solid #00B050 1.0pt;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>STTF</span></b></p>
  </td>
  <td width=108 nowrap rowspan=2 style='width:81.0pt;border:solid #00B050 1.0pt;
  border-left:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>PID</span></b></p>
  </td>
  <td width=75 nowrap rowspan=2 style='width:56.0pt;border:solid #00B050 1.0pt;
  border-left:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>WITEL</span></b></p>
  </td>
  <td width=72 nowrap rowspan=2 style='width:54.0pt;border:solid #00B050 1.0pt;
  border-left:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>STO</span></b></p>
  </td>
  <td width=387 nowrap rowspan=2 style='width:290.0pt;border:solid #00B050 1.0pt;
  border-left:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>LOKASI</span></b></p>
  </td>
  <td width=139 rowspan=2 style='width:104.0pt;border:solid #00B050 1.0pt;
  border-left:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>STATUS GO LIVE LOP</span></b></p>
  </td>
  <td width=119 nowrap rowspan=2 style='width:89.0pt;border:solid #00B050 1.0pt;
  border-left:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>STATUS FISIK</span></b></p>
  </td>
  <td width=180 nowrap colspan=3 style='width:135.0pt;border:solid #00B050 1.0pt;
  border-left:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>REALISASI PORT</span></b></p>
  </td>
  <td width=101 rowspan=2 style='width:76.0pt;border:solid #00B050 1.0pt;
  border-left:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>TGL COMTEST</span></b></p>
  </td>
  <td width=91 rowspan=2 style='width:68.0pt;border:solid #00B050 1.0pt;
  border-left:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>TGL UT</span></b></p>
  </td>
  <td width=68 nowrap style='width:51.0pt;border-top:solid #00B050 1.0pt;
  border-left:none;border-bottom:solid #00B050 1.0pt;border-right:none;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt'><b><span
  style='color:white'>GO LIVE</span></b></p>
  </td>
  <td width=91 nowrap style='width:68.0pt;border-top:solid #00B050 1.0pt;
  border-left:none;border-bottom:solid #00B050 1.0pt;border-right:none;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt'><b><span
  style='color:white'>&nbsp;</span></b></p>
  </td>
  <td width=79 nowrap style='width:59.0pt;border-top:solid #00B050 1.0pt;
  border-left:none;border-bottom:solid #00B050 1.0pt;border-right:none;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt'><b><span
  style='color:white'>&nbsp;</span></b></p>
  </td>
  <td width=30 nowrap style='width:22.15pt;border-top:solid #00B050 1.0pt;
  border-left:none;border-bottom:solid #00B050 1.0pt;border-right:none;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt'><b><span
  style='color:white'>&nbsp;</span></b></p>
  </td>
  <td width=79 nowrap style='width:59.0pt;border:solid #00B050 1.0pt;
  border-left:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt'><b><span
  style='color:white'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='height:17.25pt'>
  <td width=59 nowrap style='width:44.0pt;border:none;border-right:solid #00B050 1.0pt;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:17.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>8 Port</span></b></p>
  </td>
  <td width=53 nowrap style='width:40.0pt;border:none;border-right:solid #00B050 1.0pt;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:17.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>16 Port</span></b></p>
  </td>
  <td width=68 nowrap style='width:51.0pt;border:none;border-right:solid #00B050 1.0pt;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:17.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>Total Port</span></b></p>
  </td>
  <td width=68 nowrap style='width:51.0pt;border:none;border-right:solid #00B050 1.0pt;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:17.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>STATUS</span></b></p>
  </td>
  <td width=91 nowrap style='width:68.0pt;border:none;border-right:solid #00B050 1.0pt;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:17.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>TGL</span></b></p>
  </td>
  <td width=187 nowrap colspan=3 style='width:140.15pt;border-top:none;
  border-left:none;border-bottom:solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:17.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>IDE SW</span></b></p>
  </td>
 </tr>
 <tr style='height:15.75pt'>
  <td width=103 nowrap style='width:77.0pt;border:solid #00B050 1.0pt;
  border-top:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b>21</b></p>
  </td>
  <td width=108 nowrap style='width:81.0pt;border-top:none;border-left:none;
  border-bottom:solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>1</span></b></p>
  </td>
  <td width=75 nowrap style='width:56.0pt;border-top:none;border-left:none;
  border-bottom:solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>2</span></b></p>
  </td>
  <td width=72 nowrap style='width:54.0pt;border-top:none;border-left:none;
  border-bottom:solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>3</span></b></p>
  </td>
  <td width=387 nowrap style='width:290.0pt;border-top:none;border-left:none;
  border-bottom:solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>4</span></b></p>
  </td>
  <td width=139 nowrap style='width:104.0pt;border:none;border-bottom:solid #00B050 1.0pt;
  background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>5</span></b></p>
  </td>
  <td width=119 nowrap style='width:89.0pt;border-top:none;border-left:solid #00B050 1.0pt;
  border-bottom:solid #00B050 1.0pt;border-right:none;background:black;
  padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>7</span></b></p>
  </td>
  <td width=59 nowrap style='width:44.0pt;border:solid #00B050 1.0pt;
  border-right:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>8</span></b></p>
  </td>
  <td width=53 nowrap style='width:40.0pt;border:solid #00B050 1.0pt;
  border-right:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>9</span></b></p>
  </td>
  <td width=68 nowrap style='width:51.0pt;border:solid #00B050 1.0pt;
  border-right:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>10</span></b></p>
  </td>
  <td width=101 nowrap style='width:76.0pt;border-top:none;border-left:solid #00B050 1.0pt;
  border-bottom:solid #00B050 1.0pt;border-right:none;background:black;
  padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>11</span></b></p>
  </td>
  <td width=91 nowrap style='width:68.0pt;border-top:none;border-left:solid #00B050 1.0pt;
  border-bottom:solid #00B050 1.0pt;border-right:none;background:black;
  padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>12</span></b></p>
  </td>
  <td width=68 nowrap style='width:51.0pt;border:solid #00B050 1.0pt;
  border-right:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>13</span></b></p>
  </td>
  <td width=91 nowrap style='width:68.0pt;border:solid #00B050 1.0pt;
  border-right:none;background:black;padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>14</span></b></p>
  </td>
  <td width=79 nowrap style='width:59.0pt;border-top:none;border-left:solid #00B050 1.0pt;
  border-bottom:solid #00B050 1.0pt;border-right:none;background:black;
  padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>18</span></b></p>
  </td>
  <td width=30 nowrap style='width:22.15pt;border-top:none;border-left:solid #00B050 1.0pt;
  border-bottom:solid #00B050 1.0pt;border-right:none;background:black;
  padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>19</span></b></p>
  </td>
  <td width=79 nowrap style='width:59.0pt;border-top:none;border-left:solid #00B050 1.0pt;
  border-bottom:solid #00B050 1.0pt;border-right:none;background:black;
  padding:0mm 5.4pt 0mm 5.4pt;height:15.75pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><b><span style='color:white'>20</span></b></p>
  </td>
 </tr>
 <?php
 	$port1=0;
 	$port2=0;
 	$port_=0;
 	$port__=0;
 	$totalport=0;
 	while($data=mysqli_fetch_assoc($result_)){
      if($data['tanggalgolive'] != null){ $statusgolive="OK";}
      if($data['port']=='8'){
      	$port1=$data['jumlahport'];
      	$port_=$port1;
      	$totalport=$data['jumlahport'] * 8;
      }else if($data['port']=='16'){
      	$port2=$data['jumlahport'];
      	$port__=$port2;
      	$totalport=$data['jumlahport'] * 16;
      }
 ?>
 <tr style='height:30.0pt'>
  <td width=108 style='width:81.0pt;border:solid #00B050 1.0pt;border-top:none;
  padding:0mm 5.4pt 0mm 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php echo $data['stf'];?></span></p>
  </td>
  <td width=108 style='width:81.0pt;border:solid #00B050 1.0pt;border-top:none;
  padding:0mm 5.4pt 0mm 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php echo $data['pid'];?></span></p>
  </td>
  <td width=75 style='width:56.0pt;border-top:none;border-left:none;border-bottom:
  solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php echo $data['NAMAWITEL'];?></span></p>
  </td>
  <td width=72 style='width:54.0pt;border-top:none;border-left:none;border-bottom:
  solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php echo $data['IDSTO'];?></span></p>
  </td>
  <td width=387 style='width:290.0pt;border-top:none;border-left:none;
  border-bottom:solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php echo $data['LOKASI'];?></span></p>
  </td>
    <td width=387 style='width:290.0pt;border-top:none;border-left:none;
  border-bottom:solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php echo $data['statusgolive'];?></span></p>
  </td>
  <td width=119 style='width:89.0pt;border-top:none;border-left:none;
  border-bottom:solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php echo $data['statusfisik'];?></span></p>
  </td>
  <td width=59 style='width:44.0pt;border-top:none;border-left:none;border-bottom:
  solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php if($data['port']=='8'){echo $port_;}else{echo 0;}?></span></p>
  </td>
  <td width=53 style='width:40.0pt;border-top:none;border-left:none;border-bottom:
  solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php if($data['port']=='16'){echo $port__;}else{echo 0;}?></span></p>
  </td>
  <td width=68 style='width:51.0pt;border-top:none;border-left:none;border-bottom:
  solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php echo $totalport;?></span></p>
  </td>
  <td width=101 style='width:76.0pt;border-top:none;border-left:none;
  border-bottom:solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php echo $data['tanggalcomite'];?></span></p>
  </td>
  <td width=91 style='width:68.0pt;border-top:none;border-left:none;border-bottom:
  solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php echo $data['tanggalut'];?></span></p>
  </td>
  <td width=68 nowrap style='width:51.0pt;border-top:none;border-left:none;
  border-bottom:solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php echo $statusgolive ?></span></p>
  </td>
  <td width=91 style='width:68.0pt;border-top:none;border-left:none;border-bottom:
  solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php echo $data['tanggalgolive'];?></span></p>
  </td>
  <td width=79 style='width:59.0pt;border-top:none;border-left:none;border-bottom:
  solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php echo $data['ideswawal']; ?></span></p>
  </td>
  <td width=30 style='width:22.15pt;border-top:none;border-left:none;
  border-bottom:solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;
  padding:0mm 5.4pt 0mm 5.4pt;height:30.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0mm;margin-bottom:.0001pt;
  text-align:center'><span style='color:black'>-</span></p>
  </td>
  <td width=79 style='width:59.0pt;border-top:none;border-left:none;border-bottom:
  solid #00B050 1.0pt;border-right:solid #00B050 1.0pt;padding:0mm 5.4pt 0mm 5.4pt;
  height:30.0pt'>
  <p class=MsoNormal style='margin-bottom:0mm;margin-bottom:.0001pt;text-indent:
  11.0pt'><span style='color:black'><?php echo $data['ideswawal']; ?></span></p>
  </td>
 </tr>
<?php }?>
</table>
</div>
</div>
<p class=MsoNormal>&nbsp;</p>

</div>

</body>

</html>
