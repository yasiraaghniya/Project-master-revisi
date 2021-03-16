@extends('main2')

@section('title', 'Dashboard')

@section('breadcrums')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">

                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
<div class="content mt-3">

            <div class="animated fadeIn">
            <td align="center">
        <img src="{{asset('img/tentang.jpg')}}" style="display: block; margin: 0 auto; text-align: center;" width="380" height="220" class="img-responsive">
      </td>
                <br>
        <p style="text-align: justify">Kejaksaan Tinggi adalah suatu instansi pemerintah yang bergerak melaksanakan tugas dan wewenang serta fungsi 
            Kejaksaan di daerah hukum Kejaksaan Tinggi yang bersangkutan sesuai dengan peraturan perundangan-undangan dan kebijaksanaan yang 
            ditetapkan oleh Jaksa. </p>

           <p  style="text-align: justify">Dalam menjalankan tugas dan wewenangnya, Kejaksaan dipimpin oleh Jaksa Agung yang membawahi 6 (enam) 
            Jaksa Agung Muda serta 31 Kepala Kejaksaan Tinggi pada tiap provinsi. UU No. 16 Tahun 2004 tentang Kejaksaan Republik Indonesia juga 
            mengisyaratkan bahwa lembaga Kejaksaan berada pada posisi sentral dengan peran strategis dalam pemantapan ketahanan bangsa. 
            Karena Kejaksaan berada di poros dan menjadi filter antara proses penyidikan dan proses pemeriksaan di persidangan serta juga sebagai 
            pelaksana penetapan dan keputusan pengadilan. Sehingga, Lembaga Kejaksaan sebagai pengendali proses perkara (Dominus Litis), 
            karena hanya institusi Kejaksaan yang dapat menentukan apakah suatu kasus dapat diajukan ke Pengadilan atau tidak berdasarkan alat 
            bukti yang sah menurut Hukum Acara Pidana.</p>
            
           <p  style="text-align: justify">Perlu ditambahkan, Kejaksaan juga merupakan satu-satunya instansi pelaksana putusan pidana (executive ambtenaar). 
               Selain berperan dalam perkara pidana, Kejaksaan juga memiliki peran lain dalam Hukum Perdata dan Tata Usaha Negara, 
               yaitu dapat mewakili Pemerintah dalam Perkara Perdata dan Tata Usaha Negara sebagai Jaksa Pengacara Negara. 
               Jaksa sebagai pelaksana kewenangan tersebut diberi wewenang sebagai Penuntut Umum serta melaksanakan putusan pengadilan, 
               dan wewenang lain berdasarkan Undang-Undang.</p>
            </div>
        </div><!-- .content -->
@endsection