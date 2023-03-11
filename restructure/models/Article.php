<?php
class Article{
    // Thuộc tính

    private $ma_bviet;
    private $tieude;
    private $ten_bhat;
    private $ma_tloai;
    private $tomtat;
    private $noidung;
    private $ma_tgia;
    private $ngayviet;
    private $hinhanh;


    private $ten_tgia;
    private $ten_tloai;


    public function __construct($ma_bviet = null, $tieude = null, $ten_bhat = null, $ten_tloai = null, $tomtat = null, $noidung = null, $ten_tgia = null, $ngayviet = null, $hinhanh = null){
        $this->ma_bviet = $ma_bviet;
        $this->tieude = $tieude;
        $this->ten_bhat = $ten_bhat;
        $this->ten_tloai = $ten_tloai;
        $this->tomtat = $tomtat;
        $this->noidung = $noidung;
        $this->ten_tgia = $ten_tgia;
        $this->ngayviet = $ngayviet;
        $this->hinhanh = $hinhanh;
    }

    // Setter và Getter
    public function getMaBviet() {
        return $this->ma_bviet;
    }

    public function setMaBviet($ma_bviet) {
        $this->ma_bviet = $ma_bviet;
    }

    public function getHinhanh() {
        return $this->hinhanh;
    }

    public function setHinhanh($hinhanh) {
        $this->hinhanh = $hinhanh;
    }

    public function getTenBhat() {
        return $this->ten_bhat;
    }

    public function setTenBhat($ten_bhat) {
        $this->ten_bhat = $ten_bhat;
    }
    public function getTieude() {
        return $this->tieude;
    }

    public function setTieude($tieude) {
        $this->tieude = $tieude;
    }

    public function getTomtat() {
        return $this->tomtat;
    }

    public function setTomtat($tomtat) {
        $this->tomtat = $tomtat;
    }

    public function getMatgia() {
        return $this->ma_tgia;
    }

    public function setMatgia($ma_tgia) {
        $this->ma_tgia = $ma_tgia;
    }

    public function getMaTloai() {
        return $this->ma_tloai;
    }

    public function setMaTloai($ma_tloai) {
        $this->ma_tloai = $ma_tloai;
    }

    public function getNgayviet() {
        return $this->ngayviet;
    }

    public function setNgayviet($ngayviet) {
        $this->ngayviet = $ngayviet;
    }

    public function getNoidung() {
        return $this->noidung;
    }

    public function setNoidung($noidung) {
        $this->noidung = $noidung;
    }

    public function getTentloai() {
        return $this->ten_tloai;
    }

    public function setTentloai($ten_tloai) {
        $this->ten_tloai = $ten_tloai;
    }

    public function getTentgia() {
        return $this->ten_tgia;
    }

    public function setTentgia($ten_tgia) {
        $this->ten_tgia = $ten_tgia;
    }
}
?>