<div>
    @extends('layouts.layout')
    @section('title', 'Home')
    @section('content-layout')
        <div class="flex items-center justify-center  ">
            <div class="">
                <h1>Crie seu evento</h1>
                <a href="#">Crie aqui</a>
            </div>

            <div> 
                <table class="table-auto">
                    <thead>
                      <tr>
                        <th>Song</th>
                        <th>Artist</th>
                        <th>Year</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                        <td>Malcolm Lockyer</td>
                        <td>1961</td>
                      </tr>
                      <tr>
                        <td>Witchy Woman</td>
                        <td>The Eagles</td>
                        <td>1972</td>
                      </tr>
                      <tr>
                        <td>Shining Star</td>
                        <td>Earth, Wind, and Fire</td>
                        <td>1975</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    @endsection
</div>
