@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Add Patient</h4>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('patients.store') }}" method="POST">
                            @csrf

                            <div class="row">

                                <!-- Full Name -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" name="full_name" class="form-control"
                                            value="{{ old('full_name') }}">
                                    </div>
                                </div>

                                <!-- Patient Type -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Patient Type</label>
                                        <select name="patient_type" class="form-select">
                                            <option value="">Select</option>
                                            <option value="Direct">Direct</option>
                                            <option value="Indirect">Indirect</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Contact -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Contact No.</label>
                                        <input type="text" name="contact_no" class="form-control">
                                    </div>
                                </div>

                                <!-- HIC -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">HIC No.</label>
                                        <input type="text" name="hic_no" class="form-control">
                                    </div>
                                </div>

                                <!-- DOB -->
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" name="dob" class="form-control">
                                    </div>
                                </div>

                                <!-- Age -->
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Age</label>
                                        <input type="number" name="age" class="form-control">
                                    </div>
                                </div>

                                <!-- Gender -->
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <select name="gender" class="form-select">
                                            <option value="">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email ID</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>

                                <!-- Height -->
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Height (cm)</label>
                                        <input type="text" name="height" class="form-control">
                                    </div>
                                </div>

                                <!-- Weight -->
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Weight (kg)</label>
                                        <input type="text" name="weight" class="form-control">
                                    </div>
                                </div>

                                <!-- Referral By -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            Referral By
                                            <small class="text-muted">
                                                (Search Doctor)
                                            </small>
                                        </label>

                                        <select name="referral_doctor_id" class="form-select select2">
                                            <option value="">Select Doctor</option>

                                            {{-- @foreach ($doctors as $doctor)
                                                <option value="{{ $doctor->id }}">
                                                    {{ $doctor->name }}
                                                </option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>

                                <!-- Organization -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Organization</label>
                                        <input type="text" name="organization" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <h5>Address Information</h5>

                            <div class="row">

                                <!-- State -->
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">State</label>
                                        <select name="state_id" id="state_id" class="form-select">
                                            <option value="">Select State</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- District -->
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">District</label>
                                        <select name="district_id" id="district_id" class="form-select">
                                            <option value="">Select District</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- City -->
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <select name="city_id" id="city_id" class="form-select">
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- PIN -->
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">PIN Code</label>
                                        <input type="text" name="pincode" class="form-control">
                                    </div>
                                </div>

                                <!-- Reg No -->
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Registration No.</label>
                                        <input type="text" name="reg_no" class="form-control">
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea name="address" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>

                                <!-- Remark -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Remark</label>
                                        <textarea name="remark" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    Save Patient
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
