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
        <tr @error('question1') class="bg-danger" @enderror>
          <th scope="row">1</th>
          <td>Pada pertemuan pertama, nampak dosen (atau anggota tim), berusaha menjelaskan apa yang akan dipelajari mahasiswa dalam satu semester termasuk cara penilaiannya</td>
          <td style="width: 25%">
            <input type="radio" name="question1" value="1" {{(old('question1') == '1') ? 'checked' : ''}}> 1
            <input type="radio" name="question1" value="2" {{(old('question1') == '2') ? 'checked' : ''}}> 2
            <input type="radio" name="question1" value="3" {{(old('question1') == '3') ? 'checked' : ''}}> 3
            <input type="radio" name="question1" value="4" {{(old('question1') == '4') ? 'checked' : ''}}>  4
            <input type="radio" name="question1" value="5" {{(old('question1') == '5') ? 'checked' : ''}} required> 5
          </td>
        </tr>
        <tr @error('question2') class="bg-danger" @enderror>
          <th scope="row">2</th>
          <td>Dosen nampak berusaha menyiapkan materi dengan sebaik-baiknya  untuk diajarkan</td>
          <td style="width: 25%">
            <input type="radio" name="question2" value="1" {{(old('question2') == '1') ? 'checked' : ''}}> 1
            <input type="radio" name="question2" value="2" {{(old('question2') == '2') ? 'checked' : ''}}> 2
            <input type="radio" name="question2" value="3" {{(old('question2') == '3') ? 'checked' : ''}}> 3
            <input type="radio" name="question2" value="4" {{(old('question2') == '4') ? 'checked' : ''}}>  4
            <input type="radio" name="question2" value="5" {{(old('question2') == '5') ? 'checked' : ''}} required> 5
          </td>
        </tr>
        <tr @error('question3') class="bg-danger" @enderror>
          <th scope="row">3</th>
          <td>Dosen nampak bersungguh-sungguh dalam mengajar, agar materi yang dibawakannya dapat dimengerti mahasiswa</td>
          <td style="width: 25%">
            <input type="radio" name="question3" value="1" {{(old('question3') == '1') ? 'checked' : ''}}> 1
            <input type="radio" name="question3" value="2" {{(old('question3') == '2') ? 'checked' : ''}}> 2
            <input type="radio" name="question3" value="3" {{(old('question3') == '3') ? 'checked' : ''}}> 3
            <input type="radio" name="question3" value="4" {{(old('question3') == '4') ? 'checked' : ''}}>  4
            <input type="radio" name="question3" value="5" {{(old('question3') == '5') ? 'checked' : ''}} required> 5
          </td>
        </tr>
        <tr @error('question4') class="bg-danger" @enderror>
          <th scope="row">4</th>
          <td>Dosen nampak berusaha menjelaskan bahwa secara umum bahan kuliahnya akan bermanfaat sebagai bahan dasar pelajaran lanjut atau sebagai bekal pengetahuan menghadapi dunia kerja</td>
          <td style="width: 25%">
            <input type="radio" name="question4" value="1" {{(old('question4') == '1') ? 'checked' : ''}}> 1
            <input type="radio" name="question4" value="2" {{(old('question4') == '2') ? 'checked' : ''}}> 2
            <input type="radio" name="question4" value="3" {{(old('question4') == '3') ? 'checked' : ''}}> 3
            <input type="radio" name="question4" value="4" {{(old('question4') == '4') ? 'checked' : ''}}>  4
            <input type="radio" name="question4" value="5" {{(old('question4') == '5') ? 'checked' : ''}} required> 5
          </td>
        </tr>
        <tr @error('question5') class="bg-danger" @enderror>
          <th scope="row">5</th>
          <td>Dosen sering memberi tugas / pekerjaan rumah / bahan diskusi yang lebih bersifat membantu mahasiswa dalam memahami materi pelajaran dari pada sekedar memberatkan mahasiswa</td>
          <td style="width: 25%">
            <input type="radio" name="question5" value="1" {{(old('question5') == '1') ? 'checked' : ''}}> 1
            <input type="radio" name="question5" value="2" {{(old('question5') == '2') ? 'checked' : ''}}> 2
            <input type="radio" name="question5" value="3" {{(old('question5') == '3') ? 'checked' : ''}}> 3
            <input type="radio" name="question5" value="4" {{(old('question5') == '4') ? 'checked' : ''}}>  4
            <input type="radio" name="question5" value="5" {{(old('question5') == '5') ? 'checked' : ''}} required> 5
          </td>
        </tr>
        <tr @error('question6') class="bg-danger" @enderror>
          <th scope="row">6</th>
          <td>Dosen nampak berusaha dengan caranya agar mahasiswa tertarik mengikuti pelajarannya dari pada membuat mahasiswa merasa bosan</td>
          <td style="width: 25%">
            <input type="radio" name="question6" value="1" {{(old('question6') == '1') ? 'checked' : ''}}> 1
            <input type="radio" name="question6" value="2" {{(old('question6') == '2') ? 'checked' : ''}}> 2
            <input type="radio" name="question6" value="3" {{(old('question6') == '3') ? 'checked' : ''}}> 3
            <input type="radio" name="question6" value="4" {{(old('question6') == '4') ? 'checked' : ''}}>  4
            <input type="radio" name="question6" value="5" {{(old('question6') == '5') ? 'checked' : ''}} required> 5
          </td>
        </tr>
        <tr @error('question7') class="bg-danger" @enderror>
          <th scope="row">7</th>
          <td>Dosen memakai buku acuan / diktat / bahan ajar yang mana memang membantu mahasiswa dalam menguasai materi pelajaran</td>
          <td style="width: 25%">
            <input type="radio" name="question7" value="1" {{(old('question7') == '1') ? 'checked' : ''}}> 1
            <input type="radio" name="question7" value="2" {{(old('question7') == '2') ? 'checked' : ''}}> 2
            <input type="radio" name="question7" value="3" {{(old('question7') == '3') ? 'checked' : ''}}> 3
            <input type="radio" name="question7" value="4" {{(old('question7') == '4') ? 'checked' : ''}}>  4
            <input type="radio" name="question7" value="5" {{(old('question7') == '5') ? 'checked' : ''}} required> 5
          </td>
        </tr>
        <tr @error('question8') class="bg-danger" @enderror>
          <th scope="row">8</th>
          <td>Dalam memberi kesempatan bertanya baik di kelas maupun diluar dosen bersifat obyektif tanpa memandang suku, agama, ras, golongan</td>
          <td style="width: 25%">
            <input type="radio" name="question8" value="1" {{(old('question8') == '1') ? 'checked' : ''}}> 1
            <input type="radio" name="question8" value="2" {{(old('question8') == '2') ? 'checked' : ''}}> 2
            <input type="radio" name="question8" value="3" {{(old('question8') == '3') ? 'checked' : ''}}> 3
            <input type="radio" name="question8" value="4" {{(old('question8') == '4') ? 'checked' : ''}}>  4
            <input type="radio" name="question8" value="5" {{(old('question8') == '5') ? 'checked' : ''}} required> 5
          </td>
        </tr>
        <tr @error('question9') class="bg-danger" @enderror>
          <th scope="row">9</th>
          <td>Soal midtest dan / atau ujian yang diberikan dosen memang merupakan alat uji kemampuan dibanding hanya mencari kesalahan mahasiswa</td>
          <td style="width: 25%">
            <input type="radio" name="question9" value="1" {{(old('question9') == '1') ? 'checked' : ''}}> 1
            <input type="radio" name="question9" value="2" {{(old('question9') == '2') ? 'checked' : ''}}> 2
            <input type="radio" name="question9" value="3" {{(old('question9') == '3') ? 'checked' : ''}}> 3
            <input type="radio" name="question9" value="4" {{(old('question9') == '4') ? 'checked' : ''}}>  4
            <input type="radio" name="question9" value="5" {{(old('question9') == '5') ? 'checked' : ''}} required> 5
          </td>
        </tr>
        <tr @error('question10') class="bg-danger" @enderror>
          <th scope="row">10</th>
          <td>Secara umum, dosen dinilai cukup baik dalam melakukan proses belajar mengajar</td>
          <td style="width: 25%">
            <input type="radio" name="question10" value="1" {{(old('question10') == '1') ? 'checked' : ''}}> 1
            <input type="radio" name="question10" value="2" {{(old('question10') == '2') ? 'checked' : ''}}> 2
            <input type="radio" name="question10" value="3" {{(old('question10') == '3') ? 'checked' : ''}}> 3
            <input type="radio" name="question10" value="4" {{(old('question10') == '4') ? 'checked' : ''}}>  4
            <input type="radio" name="question10" value="5" {{(old('question10') == '5') ? 'checked' : ''}} required> 5
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

