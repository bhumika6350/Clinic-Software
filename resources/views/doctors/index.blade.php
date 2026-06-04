@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 mb-3 pb-3 border-bottom">
            <div class="flex-grow-1">
                <h4 class="fw-bold mb-0"> Doctor List <span class="badge badge-soft-primary fs-13 fw-medium ms-2">Total
                        Doctors : 565</span></h4>
            </div>
            <div class="text-end d-flex">
                <div class="dropdown me-1">
                    <a href="javascript:void(0);"
                        class="btn btn-md fs-14 fw-normal border bg-white rounded text-dark d-inline-flex align-items-center"
                        data-bs-toggle="dropdown">
                        Export<i class="ti ti-chevron-down ms-2"></i>
                    </a>
                    <ul class="dropdown-menu p-2">
                        <li>
                            <a class="dropdown-item" href="#">Download as PDF</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Download as Excel</a>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('doctors.create') }}" class="btn btn-primary ms-2 fs-13 btn-md"><i
                        class="ti ti-plus me-1"></i>New
                    Doctor</a>
            </div>
        </div>
        <!-- End Page Header -->

        <div class=" d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            <div class="search-set mb-3">
                <div class="d-flex align-items-center flex-wrap gap-2">
                    <div class="table-search d-flex align-items-center mb-0">
                        <div class="search-input">
                            <a href="javascript:void(0);" class="btn-searchset"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex table-dropdown mb-3 pb-1 right-content align-items-center flex-wrap row-gap-3">
                <div class="dropdown me-2">
                    <a href="javascript:void(0);"
                        class="btn btn-white bg-white fs-14 py-1 border d-inline-flex text-dark align-items-center"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <i class="ti ti-filter text-gray-5 me-1"></i>Filters
                    </a>
                    <div class="dropdown-menu dropdown-lg dropdown-menu-end filter-dropdown p-0" id="filter-dropdown">
                        <div class="d-flex align-items-center justify-content-between border-bottom filter-header">
                            <h4 class="mb-0">Filter</h4>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="link-danger text-decoration-underline">Clear All</a>
                            </div>
                        </div>
                        <form action="#">
                            <div class="filter-body pb-0">
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="form-label">Doctor</label>
                                        <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                    </div>
                                    <select class="select2" multiple="multiple">
                                        <option value="m-1" selected>Dr. Mick Thompson</option>
                                        <option value="m-2">Dr. Sarah Johnson</option>
                                        <option value="m-3">Dr. Emily Carter</option>
                                        <option value="m-4">Dr. David Lee</option>
                                        <option value="m-5">Dr. Anna Kim</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="form-label">Designation</label>
                                        <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                    </div>
                                    <select class="select2" multiple="multiple">
                                        <option value="m-1" selected>Cardiologist</option>
                                        <option value="m-2">Orthopedic Surgeon</option>
                                        <option value="m-3">Pediatrician</option>
                                        <option value="m-4">Gynecologist</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="form-label">Department</label>
                                        <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                    </div>
                                    <select class="select2" multiple="multiple">
                                        <option value="m-1" selected>Cardiology</option>
                                        <option value="m-2">Orthopedics</option>
                                        <option value="m-3">Pediatrics</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Date<span
                                            class="text-danger">*</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="form-label">Amount</label>
                                        <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                    </div>
                                    <select class="select2" multiple="multiple">
                                        <option value="m-1" selected>$501 - $1000</option>
                                        <option value="m-2">$501 - $1100</option>
                                        <option value="m-3">$701 - $1200</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="form-label">Status</label>
                                        <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                    </div>
                                    <select class="select2" multiple="multiple">
                                        <option value="m-1" selected>Available</option>
                                        <option value="m-2">Unavailable</option>
                                    </select>
                                </div>
                            </div>
                            <div class="filter-footer d-flex align-items-center justify-content-end border-top">
                                <a href="javascript:void(0);" class="btn btn-light btn-md me-2"
                                    id="close-filter">Close</a>
                                <button type="submit" class="btn btn-primary btn-md">Filter</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0);"
                        class="dropdown-toggle btn bg-white btn-md d-inline-flex align-items-center fw-normal rounded border text-dark px-2 py-1 fs-14"
                        data-bs-toggle="dropdown">
                        <span class="me-1"> Sort By : </span> Recent
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end p-2">
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-nowrap datatable">
                <thead class="thead-light">
                    <tr>
                        <th>Name & Designation</th>
                        <th>Department</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Fees</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="doctor-details.html" class="avatar me-2">
                                    <img src="assets/img/doctors/doctor-01.jpg" alt="Doctor" class="rounded-circle">
                                </a>
                                <div>
                                    <h6 class="mb-1 fs-14 fw-semibold"><a href="doctor-details.html">Dr. Mick Thompson</a>
                                    </h6>
                                    <span class="fs-13 d-block"> Cardiologist </span>
                                </div>
                            </div>
                        </td>
                        <td>Cardiology </td>
                        <td>+1 54554 54584</td>
                        <td>mick@example.com</td>
                        <td>
                            <h6 class="fs-14 fw-semibold mb-0">$458</h6>
                        </td>
                        <td><span class="badge badge-soft-success border border-success">Available</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="action-item me-2">
                                    <a href="appointment-calendar.html">
                                        <i class="ti ti-calendar-cog"></i>
                                    </a>
                                </div>
                                <div class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="edit-doctor.html"
                                                class="dropdown-item d-flex align-items-center">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
