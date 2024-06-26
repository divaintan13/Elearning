@extends('admin.main')
@section('content')
    <div class="pagetitle">
        <h1>+ Student</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Student</li>
                <li class="breadcrumb-item active">+ Student</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <form action="/admin/student/store" method="post" class="mt-3">
                    @csrf
                    <div class="mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="nin" class="form-label">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="major" class="form-label">Major</label>
                        <select name="major" id="major">
                            <option value="">Pilih Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Bisnis Digital">Bisnis Digital</option>
                        </select>

                        <div class="mb-2">
                            <label for="courses_id" class="form-label">Courses</label>
                            <select name="courses_id" id="major">
                                <option value="">Choose A Course</option>
                                @foreach($courses as $courses)
                                    <option value="{{ $courses->id }}">{{ $courses->nama }}</option>
                                @endforeach
                            </select>

                    </div>
                    <div class="mb-2">
                        <label for="class" class="form-label">Class</label>
                        <input type="text" name="class" id="class" class="form-control">
                    </div>
                    <div class="mb-4">
                        +
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </div>
        </div>
        </form>
    </section>
@endsection