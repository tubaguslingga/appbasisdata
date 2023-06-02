@extends('layout.index')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-success alert-solid" role="alert"><b>Data Kerjasama</b> {{ Session::get('success') }}</div>  
@endif 

@include('kerjasama.daftar')

<!-- Content Row -->
<div class="card">   
    <div class="card-header">
        <b>BAB 2. DOKUMEN KERJASAMA</b>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-4">No Berkas</div>
            <div class="col-sm-8">: 2305140001.1</div>
            <div class="col-sm-4">Judul Kerma</div>
            <div class="col-sm-8">: Gelar Ganda ( Double Degree ) Universitas Halu Oleo S2 Perternakan Dengan PT. ABC Perternakan Unpad</div>
        </div>   
        <br/>
        <div class="alert text-center text-light" style="background-color: #012F8B;" role="alert">
           <b>MOU & MOA</b>
        </div>

        <form action="{{ url('kerjasama',$id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-3">
              <label class="col-sm-4 col-form-label">RINGKASAN MOU</label>
              <div class="col-sm-8">
                    <div class="mb-3">
                        <textarea name="ringkasanmou" id="inputRingkasMou" class="form-control" rows="4">{{ $ringkasanmou }}</textarea>
                    </div>
                    @error('ringkasanmou')
                        <span class="text-danger">{{ $message }}</span>
                    @endif
              </div>
            </div>
            <hr/>                     

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">UNGGAH FILE MOU</label>
                <div class="col-sm-8">
                      <div class="mb-3">
                         <input name="filemou" class="form-control" type="file" id="formFile">
                      </div>
                      <a href="{{ asset('/') }}Filemou/{{ $filemou }}" target="_blank">Kerjasama_MOU_{{ $filemou }}</a>                     

                      @error('filemou')
                        <span class="text-danger">{{ $message }}</span>
                      @endif
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">NO MOA</label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <textarea name="nomormoa" class="form-control"  placeholder="No MOA" id="nomor" style="height: 100px">{{ $nomormoa }}</textarea>
                          </div>
                          @error('nomormoa')
                                <span class="text-danger">{{ $message }}</span>
                          @endif
                      </div>
                </div>
            </div>            
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">DESKRIPSI SINGKAT MOA</label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <textarea name="deskripsimoa" id="inputDeskripsiMou" class="form-control" rows="4">{{ $deskripsimoa }}</textarea>
                            @error('deskripsimoa')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Tanggal</label>
                <div class="col-sm-8">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-6">
                            <label class="form-label">Tanggal Dimulai MOA</label>
                            <input type="text" name="tglmulaimoa" class="form-control" id="inputEmail4" placeholder="Tanggal dimulai MOA" value="{{ $tglmulaimoa }}">
                            @error('tglmulaimoa')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tanggal Berakhir MOA</label>
                            <input type="text" name="tglberakhirmoa" class="form-control" id="inputPassword4" placeholder="Tanggal Berakhir MOA" value="{{ $tglberakhirmoa }}">
                            @error('tglberakhirmoa')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                        </div>
                     </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">UNGGAH FILE MOA</label>
                <div class="col-sm-8">
                      <div class="mb-3">
                         <input name="filemoa" class="form-control" type="file" id="formFile">
                         @error('filemoa')
                            <span class="text-danger">{{ $message }}</span>
                         @endif
                      </div>
                      <a href="{{ asset('/') }}Filemoa/{{ $filemoa }}" target="_blank">Kerjasama_MOU_{{ $filemou }}</a>                     

                      @error('filemou')
                        <span class="text-danger">{{ $message }}</span>
                      @endif                     
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">MISI PROGRAM KERJA SAMA </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <textarea name="misiprogram" id="misiprogram" class="form-control" rows="4">{{ $misiprogram }}</textarea>
                            @error('misiprogram')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">TARGET PROGRAM KERJA SAMA </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <textarea name="targetprogram" id="targetprogram" class="form-control" rows="4">{{ $targetprogram }}</textarea>
                            @error('targetprogram')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">ALASAN PEMILIHAN MITRA </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <textarea name="alasanmitra" id="alasanmitra" class="form-control" rows="4">{{ $alasanmitra }}</textarea>
                            @error('alasanmitra')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">PRINSIP KERJA SAMA </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <textarea name="prinsipkerjasama" id="prinsipkerjasama" class="form-control" rows="4">{{ $prinsipkerjasama }}</textarea>
                            @error('prinsipkerjasama')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">MANFAAT KERJA SAMA </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <textarea name="manfaatkerjasama" id="manfaatkerjasama" class="form-control" rows="4">{{ $manfaatkerjasama }}</textarea>
                            @error('prinsipkerjasama')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">TANTANGAN PLELAKSANAAN KERJA SAMA </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <textarea name="tantanganpelaksanaan" id="tantanganpelaksanaan" class="form-control" rows="4">{{ $tantanganpelaksanaan }}</textarea>
                            @error('tantanganpelaksanaan')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">KEPEMILIKAN HAK CIPTA DAN ATAU PATEN </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <textarea name="kepemilikanhakcipta" id="kepemilikanhakcipta" class="form-control" rows="4">{{ $kepemilikanhakcipta }}</textarea>
                            @error('kepemilikanhakcipta')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">MEKANISME RESIPOKAL </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <textarea name="mekanismeresipokal" id="mekanismeresipokal" class="form-control" rows="4">{{ $mekanismeresipokal }}</textarea>
                            @error('mekanismeresipokal')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">KEBERLANJUTAN KERJA SAMA  </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <textarea name="keberlanjutankerjasama" id="keberlanjutankerjasama" class="form-control" rows="4">{{ $keberlanjutankerjasama }}</textarea>
                            @error('keberlanjutankerjasama')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">HAK DAN KEWAJIBAN </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                          <div class="form-floating">
                            <textarea name="hakdankewajiban" id="hakdankewajiban" class="form-control" rows="4">{{ $hakdankewajiban }}</textarea>
                            @error('hakdankewajiban')
                                <span class="text-danger">{{ $message }}</span>
                            @endif
                          </div>
                      </div>
                </div>
            </div>
            <hr/>

            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">HAK TERCANTUM </label>
                <div class="col-sm-8">
                      <div class="mb-3">
                           <label class="col-sm-8 col-form-label">Apakah hal tersebut tercantum dalam MOA? </label>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="haktercantum" id="haktercantum"  value="ya"  {{ ($haktercantum == "ya") ? 'checked' : ' '; }} >
                            <label class="form-check-label" for="haktercantum">
                              Ya
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="haktercantum" id="haktercantum1"  value="tidak" {{ ($haktercantum == "tidak") ? 'checked' : ' '; }}>
                            <label class="form-check-label" for="haktercantum1">
                              Tidak
                            </label>
                          </div>  
                          @error('haktercantum')
                                <span class="text-danger">{{ $message }}</span>
                          @endif              
                      </div>
                </div>
            </div>
            <hr/>

            <div class="d-flex flex-row-reverse bd-highlight">
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </div>

        </form>

    </div>
</div>            
    
@endsection