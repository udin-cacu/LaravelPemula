<div class="container">
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header"><h2>Data Pegawai</h2></div>
  <div class="card-body text-success">
     @foreach($pegawais as $pegawai) 
      <h4 class="card-title"><b>{{$pegawai->nama}}</b></h4>
        <h6 class="card-subtitle mb-2 text-muted"><b>ID Pegawai : </b>{{$pegawai->id_pegawai}}</h6>
        <p class="card-text"><b>Jenis Kelamin : </b>{{$pegawai->jenis_kelamin}}</p>
        <p class="card-text"><b>Email : </b>{{$pegawai->email}}</p>
        <p class="card-text"><b>No HP : </b>{{$pegawai->no_hp}}</p>
        <br><br>
        @endforeach
  </div>
</div>
</div>