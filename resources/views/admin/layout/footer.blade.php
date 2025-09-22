<footer class="footer">
    <div class="container-fluid d-flex justify-content-between">

        <div class="copyright">
            2025-<?php echo date('Y'); ?>
            {{-- <a href="http://www.themekita.com">ThemeKita</a> --}}
        </div>
    </div>
</footer>

{{-- modal create --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('admin.lotofacil.store') }}" method="post">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrar novo jogo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="num">
                                <label for="COD">COD</label>
                                <input type="text" name="cod"> <br>
                                <div class="cicle">
                                    <input type="checkbox" value="01" name="n01"> 01
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="02" name="n02"> 02
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="03" name="n03"> 03
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="04" name="n04"> 04
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="05" name="n05"> 05
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="06" name="n06"> 06
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="07" name="n07"> 07
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="08" name="n08"> 08
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="09" name="n09"> 09
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="10" name="n10"> 10
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="11" name="n11"> 11
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="12" name="n12"> 12
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="13" name="n13"> 13
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="14" name="n14"> 14
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="15" name="n15"> 15
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="16" name="n16"> 16
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="17" name="n17"> 17
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="18" name="n18"> 18
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="19" name="n19"> 19
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="20" name="n20"> 20
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="21" name="n21"> 21
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="22" name="n22"> 22
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="23" name="n23"> 23
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="24" name="n24"> 24
                                </div>
                                <div class="cicle">
                                    <input type="checkbox" value="25" name="n25"> 25
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </form>

    </div>
</div>
{{-- modal concurso --}}
<div class="modal fade" id="concurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('admin.pages.concurso.store') }}" method="post">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrar resultado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="num">
                                <label for="">COD:</label>
                                <input type="text" name="cod">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </form>

    </div>
</div>


{{-- modal result --}}
<div class="modal fade" id="result" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('admin.lotofacil.store') }}" method="post">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrar resultado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="num">
                                <input type="checkbox" value="01" name="n01"> 01
                                <input type="checkbox" value="02" name="n02"> 02
                                <input type="checkbox" value="03" name="n03"> 03
                                <input type="checkbox" value="04" name="n04"> 04
                                <input type="checkbox" value="05" name="n05"> 05
                                <input type="checkbox" value="06" name="n06"> 06
                                <input type="checkbox" value="07" name="n07"> 07
                                <input type="checkbox" value="08" name="n08"> 08
                                <input type="checkbox" value="09" name="n09"> 09
                                <input type="checkbox" value="10" name="n10"> 10
                                <input type="checkbox" value="11" name="n11"> 11
                                <input type="checkbox" value="12" name="n12"> 12
                                <input type="checkbox" value="13" name="n13"> 13
                                <input type="checkbox" value="14" name="n14"> 14
                                <input type="checkbox" value="15" name="n15"> 15
                                <input type="checkbox" value="16" name="n16"> 16
                                <input type="checkbox" value="17" name="n17"> 17
                                <input type="checkbox" value="18" name="n18"> 18
                                <input type="checkbox" value="19" name="n19"> 19
                                <input type="checkbox" value="20" name="n20"> 20
                                <input type="checkbox" value="21" name="n21"> 21
                                <input type="checkbox" value="22" name="n22"> 22
                                <input type="checkbox" value="23" name="n23"> 23
                                <input type="checkbox" value="24" name="n24"> 24
                                <input type="checkbox" value="25" name="n25"> 25
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </form>

    </div>
</div>
