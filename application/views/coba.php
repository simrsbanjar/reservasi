<!-- Bagian ini tag head digunakan untuk penampung tag 
<title>, <style>, <meta>, <link>, <script>, and <base>. -->
<?php $this->load->view('Template/Head'); ?>

<!-- Bagian paling atas diweb ini  -->
<?php $this->load->view('Template/Topbar'); ?>

<!-- Menu navigasi dibuat disini -->
<?php $this->load->view('Template/Header', array('data' => '3')); ?>

<div class="section-title">
    <h2>Antiran Poliklinik</h2>
</div>

<style>
    .row {
        border: 1px solid red;
    }
</style>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="w-full p-3 mb-4 font-medium">
                    <div class="w-full flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center shadow-md ">
                        <div class="block rounded-t overflow-hidden text-center">
                            <div class="bg-red-500 text-white py-1 uppercase">
                                Mata
                            </div>
                            <div class="border-l border-r border-b rounded-b-lg text-center border-white bg-white -pt-2 -mb-1"><span class="text-sm">
                                    Nomor Urut broooo
                                </span></div>
                            <div class="pt-1 border-l border-r border-white bg-white"><span class="text-6xl font-bold leading-tight">
                                    016
                                </span></div>
                            <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-white"><span class="text-xs leading-normal">
                                    Total Antrian : 181
                                </span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="w-full p-3 mb-4 font-medium">
                    <div class="w-full flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center shadow-md ">
                        <div class="block rounded-t overflow-hidden text-center">
                            <div class="bg-red-500 text-white py-1 uppercase">
                                Mata
                            </div>
                            <div class="border-l border-r border-b rounded-b-lg text-center border-white bg-white -pt-2 -mb-1"><span class="text-sm">
                                    Nomor Urut
                                </span></div>
                            <div class="pt-1 border-l border-r border-white bg-white"><span class="text-6xl font-bold leading-tight">
                                    016
                                </span></div>
                            <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-white"><span class="text-xs leading-normal">
                                    Total Antrian : 181
                                </span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="w-full p-3 mb-4 font-medium">
                    <div class="w-full flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center shadow-md ">
                        <div class="block rounded-t overflow-hidden text-center">
                            <div class="bg-red-500 text-white py-1 uppercase">
                                Mata
                            </div>
                            <div class="border-l border-r border-b rounded-b-lg text-center border-white bg-white -pt-2 -mb-1"><span class="text-sm">
                                    Nomor Urut
                                </span></div>
                            <div class="pt-1 border-l border-r border-white bg-white"><span class="text-6xl font-bold leading-tight">
                                    016
                                </span></div>
                            <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-white"><span class="text-xs leading-normal">
                                    Total Antrian : 181
                                </span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="w-full p-3 mb-4 font-medium">
                    <div class="w-full flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center shadow-md ">
                        <div class="block rounded-t overflow-hidden text-center">
                            <div class="bg-red-500 text-white py-1 uppercase">
                                Mata
                            </div>
                            <div class="border-l border-r border-b rounded-b-lg text-center border-white bg-white -pt-2 -mb-1"><span class="text-sm">
                                    Nomor Urut
                                </span></div>
                            <div class="pt-1 border-l border-r border-white bg-white"><span class="text-6xl font-bold leading-tight">
                                    016
                                </span></div>
                            <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-white"><span class="text-xs leading-normal">
                                    Total Antrian : 181
                                </span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="w-full p-3 mb-4 font-medium">
                    <div class="w-full flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center shadow-md ">
                        <div class="block rounded-t overflow-hidden text-center">
                            <div class="bg-red-500 text-white py-1 uppercase">
                                Mata
                            </div>
                            <div class="border-l border-r border-b rounded-b-lg text-center border-white bg-white -pt-2 -mb-1"><span class="text-sm">
                                    Nomor Urut
                                </span></div>
                            <div class="pt-1 border-l border-r border-white bg-white"><span class="text-6xl font-bold leading-tight">
                                    016
                                </span></div>
                            <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-white"><span class="text-xs leading-normal">
                                    Total Antrian : 18111
                                </span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<!-- copyright dari web -->
<?php $this->load->view('Template/Footer'); ?>