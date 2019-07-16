<form action="/questionnaire/{{$current_questionnaire->id}}" method="POST" name="form_questioner">
  @method('PUT')
  @csrf

  <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Pertanyaan</th>
          <th scope="col">Jawaban</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Pada pertemuan pertama, nampak dosen (atau anggota tim), berusaha menjelaskan apa yang akan dipelajari mahasiswa dalam satu semester termasuk cara penilaiannya</td>
          <td style="width: 25%">
            <input type="radio" name="question1" value="1"> 1
            <input type="radio" name="question1" value="2"> 2
            <input type="radio" name="question1" value="3"> 3
            <input type="radio" name="question1" value="4"> 4
            <input type="radio" name="question1" value="5"required> 5
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Dosen nampak berusaha menyiapkan materi dengan sebaik-baiknya  untuk diajarkan</td>
          <td style="width: 25%">
            <input type="radio" name="question2" value="1"> 1
            <input type="radio" name="question2" value="2"> 2
            <input type="radio" name="question2" value="3"> 3
            <input type="radio" name="question2" value="4"> 4
            <input type="radio" name="question2" value="5"required> 5
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Dosen nampak bersungguh-sungguh dalam mengajar, agar materi yang dibawakannya dapat dimengerti mahasiswa</td>
          <td style="width: 25%">
            <input type="radio" name="question3" value="1"> 1
            <input type="radio" name="question3" value="2"> 2
            <input type="radio" name="question3" value="3"> 3
            <input type="radio" name="question3" value="4"> 4
            <input type="radio" name="question3" value="5"required> 5
          </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Dosen nampak berusaha menjelaskan bahwa secara umum bahan kuliahnya akan bermanfaat sebagai bahan dasar pelajaran lanjut atau sebagai bekal pengetahuan menghadapi dunia kerja</td>
          <td style="width: 25%">
            <input type="radio" name="question4" value="1"> 1
            <input type="radio" name="question4" value="2"> 2
            <input type="radio" name="question4" value="3"> 3
            <input type="radio" name="question4" value="4"> 4
            <input type="radio" name="question4" value="5"required> 5
          </td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Dosen sering memberi tugas / pekerjaan rumah / bahan diskusi yang lebih bersifat membantu mahasiswa dalam memahami materi pelajaran dari pada sekedar memberatkan mahasiswa</td>
          <td style="width: 25%">
            <input type="radio" name="question5" value="1"> 1
            <input type="radio" name="question5" value="2"> 2
            <input type="radio" name="question5" value="3"> 3
            <input type="radio" name="question5" value="4"> 4
            <input type="radio" name="question5" value="5"required> 5
          </td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Dosen nampak berusaha dengan caranya agar mahasiswa tertarik mengikuti pelajarannya dari pada membuat mahasiswa merasa bosan</td>
          <td style="width: 25%">
            <input type="radio" name="question6" value="1"> 1
            <input type="radio" name="question6" value="2"> 2
            <input type="radio" name="question6" value="3"> 3
            <input type="radio" name="question6" value="4"> 4
            <input type="radio" name="question6" value="5"required> 5
          </td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Dosen memakai buku acuan / diktat / bahan ajar yang mana memang membantu mahasiswa dalam menguasai materi pelajaran</td>
          <td style="width: 25%">
            <input type="radio" name="question7" value="1"> 1
            <input type="radio" name="question7" value="2"> 2
            <input type="radio" name="question7" value="3"> 3
            <input type="radio" name="question7" value="4"> 4
            <input type="radio" name="question7" value="5"required> 5
          </td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Dalam memberi kesempatan bertanya baik di kelas maupun diluar dosen bersifat obyektif tanpa memandang suku, agama, ras, golongan</td>
          <td style="width: 25%">
            <input type="radio" name="question8" value="1"> 1
            <input type="radio" name="question8" value="2"> 2
            <input type="radio" name="question8" value="3"> 3
            <input type="radio" name="question8" value="4"> 4
            <input type="radio" name="question8" value="5"required> 5
          </td>
        </tr>
        <tr>
          <th scope="row">9</th>
          <td>Soal midtest dan / atau ujian yang diberikan dosen memang merupakan alat uji kemampuan dibanding hanya mencari kesalahan mahasiswa</td>
          <td style="width: 25%">
            <input type="radio" name="question9" value="1"> 1
            <input type="radio" name="question9" value="2"> 2
            <input type="radio" name="question9" value="3"> 3
            <input type="radio" name="question9" value="4"> 4
            <input type="radio" name="question9" value="5"required> 5
          </td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Secara umum, dosen dinilai cukup baik dalam melakukan proses belajar mengajar</td>
          <td style="width: 25%">
            <input type="radio" name="question10" value="1"> 1
            <input type="radio" name="question10" value="2"> 2
            <input type="radio" name="question10" value="3"> 3
            <input type="radio" name="question10" value="4"> 4
            <input type="radio" name="question10" value="5"required> 5
          </td>
        </tr>

        <tr>
          <th scope="row"></th>
          <td></td>
          <td style="width: 25%">
          <input name="form_questioner" class="btn btn-primary" type="submit" value="Simpan">
          </td>
        </tr>


      </tbody>
    </table>
  </form>
  <p align="center">(1 Sangat tidak setuju - 2 Tidak Setuju - 3 Cukup Setuju - 4 Setuju - 5 Sangat setuju)</p>

