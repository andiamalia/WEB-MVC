
<style>
    button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
    }
    
    .acc {
        background-color: #008CBA; /* Blue */
    }
    
    .tolak {
        background-color: #f44336; /* Red */
    }

    .th {
        text-align: center;
    }

    .kembali {
        background-color: #008CBA; /* Blue */
    }
    
    .bermasalah {
        background-color: #f44336; /* Red */
    }
</style>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">Status Peminjaman</h2>
        
        </div>
        <div class=tabel>
        <div class="table-responsive">
            <table class="table  table-sm table-bordered">
            <h5 class=h5>Rejected</h5>
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Id Peminajaman</th>
                <th scope="col">Id Ruangan</th>
                <th scope="col">Tanggal Mulai</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Jam Mulai</th>
                <th scope="col">Jam Selesai</th>
                <th scope="col">Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>P202303</td>
                <td>R101</td>
                <td>2023-03-08</td>
                <td>2023-03-10</td>
                <td>15.34</td>
                <td>18.00</td>
                <td>
                    <button>Acc</button>
                    <button class="acc">Pending</button>
                </td>
            </thead>
            </div>
        </div>    

        <div class=tabel1>
        
        <div class="table-responsive">
            <table class="table  table-sm table-bordered">
            <h5 class=h5>Pending</h5>
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Id Peminajaman</th>
                <th scope="col">Id Ruangan</th>
                <th scope="col">Tanggal Mulai</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Jam Mulai</th>
                <th scope="col">Jam Selesai</th>
                <th scope="col">Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>P202303</td>
                <td>R101</td>
                <td>2023-03-08</td>
                <td>2023-03-10</td>
                <td>15.34</td>
                <td>18.00</td>
                <td>
                    <button>Acc</button>
                    <button class="tolak">Rejec</button>
                </td>
            </thead>
            </div>
        </div>     

        <div class=tabel2>
        
        <div class="table-responsive">
            <table class="table  table-sm table-bordered">
            <h5 class=h5>Accepted</h5>
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Id Peminajaman</th>
                <th scope="col">Id Ruangan</th>
                <th scope="col">Tanggal Mulai</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Jam Mulai</th>
                <th scope="col">Jam Selesai</th>
                <th scope="col">Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>P202303</td>
                <td>R101</td>
                <td>2023-03-08</td>
                <td>2023-03-10</td>
                <td>15.34</td>
                <td>18.00</td>
                <td>
                    <button>Detail</button>
                </td>
            </thead>
            </div>
        </div>   
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html> 