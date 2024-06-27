@extends('layouts.front')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');

        * {
            font-family: 'Montserrat', sans-serif;
        }

        #select1 {
            padding: 0;
            height: 40px;
        }

        .row {
            margin-right: 115px;
        }

        .form-floating {
            display: flex;
        }

        .col-auto {
            margin-left: 5px;
        }

        .table td{
            height: 80px;
        }
        #job-search{
            
        }
        a {
            color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
            /* text-decoration: underline; */
            text-decoration: none;
        }
    </style>


        

        
            <div class="Punët">
                <div class="container tbl-container" style="margin-top: 10%;">
                <h3 style="font-size:30px; ">Punët</h3>
                <input type="text" id="job-search" placeholder="Kërko punën...">
                    <div class="row tbl-fixed">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Emri Kompanis</th>
                                    <th scope="col">Lokacioni</th>
                                    <th scope="col">Pozita</th>
                                    <th scope="col">Orari</th>
                                    
                                </tr>
                            </thead>
                            <tbody id="job-results">
                        @foreach($jobs as $job)
                            <tr class="clickable-row" data-href="{{ route('jobs.show', ['job' => $job->id]) }}">
                                <td>{{ $job->Titulli }}</td>
                                <td>{{ $job->Lokacioni }}</td>
                                <td>{{ $job->Kategoria }}</td>
                                <td>{{ $job->Orari }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rows = document.querySelectorAll('.clickable-row');
            rows.forEach(row => {
                row.addEventListener('click', function() {
                    window.location.href = row.getAttribute('data-href');
                });
            });

            const jobSearchInput = document.getElementById('job-search');
            const jobResults = document.getElementById('job-results');

            jobSearchInput.addEventListener('input', () => {
                const searchTerm = jobSearchInput.value.toLowerCase();
                const jobs = Array.from(document.querySelectorAll('#job-results tr'));

                jobs.forEach(job => {
                    const id = job.querySelector('td:nth-child(1)').textContent.toLowerCase();
                    const titulli = job.querySelector('td:nth-child(2)').textContent.toLowerCase();
                    const lokacioni = job.querySelector('td:nth-child(3)').textContent.toLowerCase();

                    if (id.includes(searchTerm) || titulli.includes(searchTerm) || lokacioni.includes(searchTerm)) {
                        job.style.display = 'table-row';
                    } else {
                        job.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endsection