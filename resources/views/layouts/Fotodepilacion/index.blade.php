    <!-- Contact Start -->
    @include('layouts.header')
    <div class="container-md py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

                <h2 class="section-title bg-white text-center text-primary px-3">Fototerapia
                </h2>

            </div>
            <!-- Courses Start -->

            <div class="container mt-3">
                <div class="row">
                    @foreach ($data as $Fotodepilacion)
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <br>
                            <div class="card">
                                <div class="course-item ">
                                    <h5 class="card-header bg-light ">{{ $Fotodepilacion->nombre }}</h5>
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="img/PACK-F1.png" alt="">
                                        <div
                                            class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                            <a href="#"
                                                class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                                style="border-radius: 30px 0 0 30px;">Agendar</a>

                                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                                style="border-radius: 0 30px 30px 0;" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">Ver disponibilidad</a>


                                        </div>

                                    </div>


                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-info">
                                                    <small style="color:rgb(237, 247, 255)">CONSULTAR HORA</small>                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form">
                                                          <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Introduce una fecha" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> >
                                                    </div>
                                                  <div class="form pt-2">
                                                      <select name="" id="" class="form-control">
                                                        <option value="">12:30</option>
                                                      </select>
                                                  </div>
                                                </div>

                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="btn btn-primary">Comprendido</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center p-4 pb-0">
                                        <small class="price">Precio Oferta</small>

                                        <h3 class="mb-0"> ${{ $Fotodepilacion->precio_oferta }}</h3>
                                        <div class="mb-3">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <br>
                                            <small class="">Precio Normal </small>
                                            ${{ $Fotodepilacion->precio_normal }}
                                        </div>
                                        <h5 class="mb-4">{{ $Fotodepilacion->zona_corporal }}</h5>
                                        <small class=""></small>

                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-user-tie text-primary me-2"></i>Profesional</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-clock text-primary me-2"></i>Duración: 1.49 Hrs</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-user text-primary me-2"></i>Disponible</small>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach


                    <!-- Courses End -->
                </div>

            </div>

        </div>
        {{-- <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <!-- Courses Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Servicios y tratamientos
                    </h6>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/logo.png" alt="">
                                <div
                                    class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                        style="border-radius: 30px 0 0 30px;">Ver servicio</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                        style="border-radius: 0 30px 30px 0;">Agendar</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">$149.00</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(123)</small>
                                </div>
                                <h5 class="mb-4">Tratamiento facial masculino</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-user-tie text-primary me-2"></i>Profesional</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-clock text-primary me-2"></i>Duración: 1.49 Hrs</small>
                                <small class="flex-fill text-center py-2"><i
                                        class="fa fa-user text-primary me-2"></i>Disponible</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/logo.png" alt="">
                                <div
                                    class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                        style="border-radius: 30px 0 0 30px;">Ver servicio</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                        style="border-radius: 0 30px 30px 0;">Agendar</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">$149.00</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(123)</small>
                                </div>
                                <h5 class="mb-4">Tratamiento facial femenino</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-user-tie text-primary me-2"></i>Profesional</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-clock text-primary me-2"></i>Duración: 1.49 Hrs</small>
                                <small class="flex-fill text-center py-2"><i
                                        class="fa fa-user text-primary me-2"></i>Disponible</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/logo.png" alt="">
                                <div
                                    class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                        style="border-radius: 30px 0 0 30px;">Ver servicio</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                        style="border-radius: 0 30px 30px 0;">Agendar</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">$149.00</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(123)</small>
                                </div>
                                <h5 class="mb-4">Otros</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-user-tie text-primary me-2"></i>Profesional</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-clock text-primary me-2"></i>Duración: 1.49 Hrs</small>
                                <small class="flex-fill text-center py-2"><i
                                        class="fa fa-user text-primary me-2"></i>Disponible</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses End -->
    </div> --}}

    </div>
    </div>
    <!-- Contact End -->
    @include('layouts.footer')
