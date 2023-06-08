@extends('layouts.front')
@section('title', 'AdminDash')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .tbl-container{
            max-height: fit-content;
        }
        .tbl-fixed{
            overflow-y:scroll;
            height: fit-content;
            max-height: 35vh;
            margin-top: 20px;
        }
        .table{
            min-width: min-content;
        }
        .table thead{
            position: sticky;
            top: 0px;
            background: white;
            text-align: center;
        }
        .table td{
            text-align: center;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); 
            backdrop-filter: blur(8px); 
            z-index: 9999;
        }

        .add-admin-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .addadminform{
            display: grid;
        }

        .addadminform button{
            margin: 5px;
        }

        .addadminform input{
            border-radius: 5px;
            border: .5px solid rgb(1,1,1);
            font-size: 20px;
        }
        
        .form-item{
            display: grid;
            margin: 15px;
        }
    </style>

</head>
<body>
    <div class="Përdoruesit"> 
        <div class="addadmin" style="float:right; margin-right: 100px;">
            <a class="btn btn-dark bg-success border-0 ml-5" role="button" id="add-admin-btn">Shto Admin</a>
        </div> 
        <div class="container tbl-container" style="margin-top: 10%;">
            <h3 style="font-size:30px; ">Përdoruesit</h3>
            <input type="text" id="user-search" placeholder="Kërko përdoruesin...">
            <div class="row tbl-fixed">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Emri</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roli</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody id="user-results">
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td><form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-dark bg-danger border-0" type="submit">Fshij</button>
                                </form></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="Punët">
        <div class="container tbl-container" style="margin-top: 10%;">
        <h3 style="font-size:30px; ">Punët</h3>
        <input type="text" id="job-search" placeholder="Kërko punën...">
            <div class="row tbl-fixed">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Emri Kompanis</th>
                            <th scope="col">Vendi</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            
                        </tr>
                    </thead>
                    <tbody id="job-results">
                        @foreach($jobs as $job)
                            <tr>
                                <td>{{$job->id}}</td>
                                <td>{{$job->Titulli}}</td>
                                <td>{{$job->Lokacioni}}</td>
                                <td>
                                    <form action="{{ route('admin.job.delete', $job->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-dark bg-danger border-0" type="submit">Fshij</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <script>
        const userSearchInput = document.getElementById('user-search');
        const jobSearchInput = document.getElementById('job-search');
        const userResults = document.getElementById('user-results');
        const jobResults = document.getElementById('job-results');

        userSearchInput.addEventListener('input', () => {
            const searchTerm = userSearchInput.value.toLowerCase();
            const users = Array.from(document.querySelectorAll('#user-results tr'));

            users.forEach(user => {
                const id = user.querySelector('td:nth-child(1)').textContent.toLowerCase();
                const name = user.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const email = user.querySelector('td:nth-child(3)').textContent.toLowerCase();
                const role = user.querySelector('td:nth-child(4)').textContent.toLowerCase();

                if (id.includes(searchTerm) || name.includes(searchTerm) || email.includes(searchTerm) || role.includes(searchTerm)) {
                    user.style.display = 'table-row';
                } else {
                    user.style.display = 'none';
                }
            });
        });

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
    </script>

    <script>
        const addAdminButton = document.getElementById('add-admin-btn');
        const overlay = document.createElement('div');
        overlay.classList.add('overlay');
        const addAdminForm = document.createElement('div');
        addAdminForm.classList.add('add-admin-form');
        addAdminForm.innerHTML = `
            <h2>Add Admin</h2>
            <form class="addadminform" action="{{ route('admin.users.store') }}" method="POST">
                @csrf
                
                <div class="form-item">
                    <label for="id">ID:</label>
                    <input type="text" id="id" name="id" required>
                </div>

                <div class="form-item">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-item">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-item">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <input type="hidden" name="role" value="admin">

                <button class="btn btn-dark bg-success border-0" type="submit">Add</button>
                <button class="btn btn-dark bg-danger border-0" type="button" id="close-btn">Close</button>
            </form>
        `;

        addAdminButton.addEventListener('click', () => {
            document.body.appendChild(overlay);
            overlay.appendChild(addAdminForm);
        });

        document.addEventListener('click', (event) => {
            if (event.target === overlay || event.target.id === 'close-btn') {
                overlay.remove();
            }
        });
    </script>

@endsection