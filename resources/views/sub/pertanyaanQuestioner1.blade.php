<form action="/questionnaire/{{$current_questionnaire->id}}" method="POST" name="form_question">
  @method('PUT')
  @csrf

  <div class="form-row">
    <div class="form-group col-md-1">
      <h3 class="text-center">No.</h3>
    </div>
    <div class="form-group col-md-7">
      <h3>Pertanyaan</h3>
    </div>
    <div class="form-group col-md-3">
      <h3>Jawaban</h3>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-1">
      <p class="text-center">1</p>
    </div>
    <div class="form-group col-md-7">
      <p>Pada pertemuan pertama, nampak dosen (atau anggota tim), berusaha menjelaskan apa yang akan dipelajari mahasiswa dalam satu semester termasuk cara penilaiannya</p>
    </div>
    <div class="form-group col-md-3">
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question11" value="1" name="question1">
        <label class="custom-control-label" for="question11">5. Sangat Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question12" value="2" name="question1">
        <label class="custom-control-label" for="question12">4. Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question13" value="3" name="question1">
        <label class="custom-control-label" for="question13">3. Cukup Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question14" value="4" name="question1">
        <label class="custom-control-label" for="question14">2. Kurang Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question15" value="5" name="question1" required>
        <label class="custom-control-label" for="question15">1. Tidak Setuju</label>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-1">
      <p class="text-center">2</p>
    </div>
    <div class="form-group col-md-7">
      <p>Dosen nampak berusaha menyiapkan materi dengan sebaik-baiknya untuk diajarkan</p>
    </div>
    <div class="form-group col-md-3">
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question21" value="1" name="question2">
        <label class="custom-control-label" for="question21">Sangat Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question22" value="2" name="question2">
        <label class="custom-control-label" for="question22">Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question23" value="3" name="question2">
        <label class="custom-control-label" for="question23">Cukup Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question24" value="4" name="question2">
        <label class="custom-control-label" for="question24">Kurang Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question25" value="5" name="question2" required>
        <label class="custom-control-label" for="question25">Tidak Setuju</label>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-1">
      <p class="text-center">3</p>
    </div>
    <div class="form-group col-md-7">
      <p>Dosen nampak bersungguh-sungguh dalam mengajar, agar materi yang dibawakannya dapat dimengerti mahasiswa</p>
    </div>
    <div class="form-group col-md-3">
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question31" value="1" name="question3">
        <label class="custom-control-label" for="question31">Sangat Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question32" value="2" name="question3">
        <label class="custom-control-label" for="question32">Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question33" value="3" name="question3">
        <label class="custom-control-label" for="question33">Cukup Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question34" value="4" name="question3">
        <label class="custom-control-label" for="question34">Kurang Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question35" value="5" name="question3" required>
        <label class="custom-control-label" for="question35">Tidak Setuju</label>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-1">
      <p class="text-center">4</p>
    </div>
    <div class="form-group col-md-7">
      <p>Dosen nampak berusaha menjelaskan bahwa secara umum bahan kuliahnya akan bermanfaat sebagai bahan dasar pelajaran lanjut atau sebagai bekal pengetahuan menghadapi dunia kerja</p>
    </div>
    <div class="form-group col-md-3">
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question41" value="1" name="question4">
        <label class="custom-control-label" for="question41">Sangat Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question42" value="2" name="question4">
        <label class="custom-control-label" for="question42">Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question43" value="3" name="question4">
        <label class="custom-control-label" for="question43">Cukup Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question44" value="4" name="question4">
        <label class="custom-control-label" for="question44">Kurang Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question45" value="5" name="question4" required>
        <label class="custom-control-label" for="question45">Tidak Setuju</label>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-1">
      <p class="text-center">5</p>
    </div>
    <div class="form-group col-md-7">
      <p>Dosen sering memberi tugas / pekerjaan rumah / bahan diskusi yang lebih bersifat membantu mahasiswa dalam memahami materi pelajaran dari pada sekedar memberatkan mahasiswa</p>
    </div>
    <div class="form-group col-md-3">
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question51" value="1" name="question5">
        <label class="custom-control-label" for="question51">Sangat Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question52" value="2" name="question5">
        <label class="custom-control-label" for="question52">Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question53" value="3" name="question5">
        <label class="custom-control-label" for="question53">Cukup Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question54" value="4" name="question5">
        <label class="custom-control-label" for="question54">Kurang Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question55" value="5" name="question5" required>
        <label class="custom-control-label" for="question55">Tidak Setuju</label>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-1">
      <p class="text-center">6</p>
    </div>
    <div class="form-group col-md-7">
      <p>Dosen nampak berusaha dengan caranya agar mahasiswa tertarik mengikuti pelajarannya dari pada membuat mahasiswa merasa bosan</p>
    </div>
    <div class="form-group col-md-3">
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question61" value="1" name="question6">
        <label class="custom-control-label" for="question61">Sangat Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question62" value="2" name="question6">
        <label class="custom-control-label" for="question62">Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question63" value="3" name="question6">
        <label class="custom-control-label" for="question63">Cukup Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question64" value="4" name="question6">
        <label class="custom-control-label" for="question64">Kurang Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question65" value="5" name="question6" required>
        <label class="custom-control-label" for="question65">Tidak Setuju</label>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-1">
      <p class="text-center">7</p>
    </div>
    <div class="form-group col-md-7">
      <p>Dosen memakai buku acuan / diktat / bahan ajar yang mana memang membantu mahasiswa dalam menguasai materi pelajaran</p>
    </div>
    <div class="form-group col-md-3">
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question71" value="1" name="question7">
        <label class="custom-control-label" for="question71">Sangat Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question72" value="2" name="question7">
        <label class="custom-control-label" for="question72">Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question73" value="3" name="question7">
        <label class="custom-control-label" for="question73">Cukup Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question74" value="4" name="question7">
        <label class="custom-control-label" for="question74">Kurang Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question75" value="5" name="question7" required>
        <label class="custom-control-label" for="question75">Tidak Setuju</label>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-1">
      <p class="text-center">8</p>
    </div>
    <div class="form-group col-md-7">
      <p>Dalam memberi kesempatan bertanya baik di kelas maupun diluar dosen bersifat obyektif tanpa memandang suku, agama, ras, golongan</p>
    </div>
    <div class="form-group col-md-3">
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question81" value="1" name="question8">
        <label class="custom-control-label" for="question81">Sangat Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question82" value="2" name="question8">
        <label class="custom-control-label" for="question82">Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question83" value="3" name="question8">
        <label class="custom-control-label" for="question83">Cukup Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question84" value="4" name="question8">
        <label class="custom-control-label" for="question84">Kurang Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question85" value="5" name="question8" required>
        <label class="custom-control-label" for="question85">Tidak Setuju</label>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-1">
      <p class="text-center">9</p>
    </div>
    <div class="form-group col-md-7">
      <p>Soal midtest dan / atau ujian yang diberikan dosen memang merupakan alat uji kemampuan dibanding hanya mencari kesalahan mahasiswa</p>
    </div>
    <div class="form-group col-md-3">
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question91" value="1" name="question9">
        <label class="custom-control-label" for="question91">Sangat Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question92" value="2" name="question9">
        <label class="custom-control-label" for="question92">Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question93" value="3" name="question9">
        <label class="custom-control-label" for="question93">Cukup Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question94" value="4" name="question9">
        <label class="custom-control-label" for="question94">Kurang Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question95" value="5" name="question9" required>
        <label class="custom-control-label" for="question95">Tidak Setuju</label>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-1">
      <p class="text-center">10</p>
    </div>
    <div class="form-group col-md-7">
      <p>Secara umum, dosen dinilai cukup baik dalam melakukan proses belajar mengajar</p>
    </div>
    <div class="form-group col-md-3">
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question101" value="1" name="question10">
        <label class="custom-control-label" for="question101">Sangat Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question102" value="2" name="question10">
        <label class="custom-control-label" for="question102">Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question103" value="3" name="question10">
        <label class="custom-control-label" for="question103">Cukup Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question104" value="4" name="question10">
        <label class="custom-control-label" for="question104">Kurang Setuju</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="question105" value="5" name="question10" required>
        <label class="custom-control-label" for="question105">Tidak Setuju</label>
      </div>
    </div>
  </div>

    <input name="form_question" class="btn btn-primary" type="submit" value="Simpan">
  </form>

  <p align="center">(1 Sangat tidak setuju - 2 Tidak Setuju - 3 Cukup Setuju - 4 Setuju - 5 Sangat setuju)</p>

