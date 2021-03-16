<!DOCTYPE html>
<html>
<head>
  <title>Cetak Filter Data Pegawai</title>
<style>
  
.tdth {
  border: 0px solid #dddddd;
  text-align: left;
  padding: 8px;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.align{
  text-align: center;
}

.font
{
  font-family: arial, sans-serif;
  text-align: center;
  font-size: 13pt;
  font-style: bold;
}

.size{
  font-size:11pt;
}

.size2{
  font-size: 9pt;
}

</style>
</head>
<body>

<table width="100%" border="0">
  <tbody>
    <tr>
      <td  class="tdth" style="text-align:right">
        <img src="{{public_path('img/kejaksaan.png')}}"  width="70" height="70">
      </td>
      <td class="align tdth" valign="top" width="430">
        <font size="12pt">KEJAKSAAN REPUBLIK INDONESIA</font> <br> 
        <font size="15pt"><b>KEJAKSAAN TINGGI KALIMANTAN SELATAN</b></font> <br> 
        <font size="9pt">Jl. D.I. Panjaitan No. 26 Kel. Antasan Besar Kec. Banjarmasin Tengah Kota Banjarmasin (70114) <br>
          Telp. (0511) 6741001 Fax. (0511) 4366274</font> <br>              
      </td>
      <td class="tdth"></td>
    </tr>
    <tr>
      <hr width="100%" noshade="1">
    </tr>
  </tbody>
</table>

<table border="0" width="100%" class="size">
  <tbody>
    <tr>
      <td class="tdth" width="1">Cetak</td>
      <td class="tdth" width="1" >:</td>
      <td class="tdth d-block" width="330" >{{auth()->user()->level}} ({{auth()->user()->name}})</td>
      <td class="tdth" style="text-align: left" width="60">Tanggal Cetak</td>
      <td class="tdth" style="text-align: left" width="1">:</td>
      <td class="tdth" style="text-align: left" width="78" >{{ Carbon\Carbon::parse()->translatedFormat('d F Y') }}</td>
    </tr>

    <tr style="background-color: white">
      <td class="tdth">Filter</td>
      <td class="tdth">:</td>
      <td class="tdth">Kantor</td>
      <td class="tdth"></td>
      <td class="tdth"></td>
      <td class="tdth"></td>
    </tr>

    {{-- <tr>
      <td class="tdth">Filter</td>
      <td class="tdth">:</td>
      <td class="tdth">Pangkat</td>
      <td class="tdth"></td>
      <td class="tdth"></td>
      <td class="tdth"></td>
    </tr> --}}
  </tbody>
</table>
<br><br>
<p class="font">LAPORAN DATA PEGAWAI</p>

<table class="size2">
  <tr>
    <th class="align">No</th>
    <th class="align">NIP</th>
    <th class="align">Nama Pegawai</th>
    <th class="align">NRP</th>
    <th class="align">Tempat Lahir</th>
    <th class="align">Tanggal Lahir</th>
    <th class="align">Alamat</th>
    <th class="align">No. Hp</th>
    <th class="align">Pangkat</th>
    <th class="align">Golongan</th>
    <th class="align">Jabatan</th>
    <th class="align">Unit/Bagian</th>
    <th class="align">Kantor</th>
  </tr>
  @php $no=1; @endphp
  @foreach ($datapegawai as $item)
  <tr>
    <td class="align">{{ $no++ }}</td>
    <td class="align">{{ $item->nip }}</td>
    <td class="align">{{ $item->nama_pegawai }}</td>
    <td class="align">{{ $item->nrp }}</td>
    <td class="align">{{ $item->tempatlahir }}</td>
    <td class="align">{{ $item->tgllahir }}</td>
    <td class="align">{{ $item->alamat }}</td>
    <td class="align">0{{ $item->hp }}</td>
    <td class="align">{{ $item->pangkat }}</td>
    <td class="align">{{ $item->golongan}}</td>
    <td class="align">{{ $item->jabatan }}</td>
    <td class="align">{{ $item->bagian }}</td>
    <td class="align">{{ $item->kanwil }}</td>
  </tr>
  @endforeach
</table>
<br><br>

{{-- <table width="100%">
  <tbody>
    <tr>
      <td class="tdth" width="50%"></td>
      <td class="align tdth">
        <font size="10pt">Banjarmasin, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Carbon\Carbon::parse()->translatedFormat('F Y') }}<br><br>
          <b>KEPALA KEJAKSAAN TINGGI KALIMANTAN SELATAN</b></u>
          <br><br><br><br><br>
          <b><u>ARIE ARIFIN, SH., MH</b></u><br>Jaksa Utama Madya NIP. 19601201 198503 1 004
        </font>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html> --}}

<table border="0">
  <tbody>
    <tr>
      <td class="tdth">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </td>
      <td class="align tdth">
        <font size="10pt">Banjarmasin, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Carbon\Carbon::parse()->translatedFormat('F Y') }}<br><br>
          <b>KEPALA KEJAKSAAN TINGGI KALIMANTAN SELATAN</b></u>
          <br><br><br><br><br>
          <b><u>ARIE ARIFIN, SH., MH</b></u><br>Jaksa Utama Madya NIP. 19601201 198503 1 004
        </font>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>