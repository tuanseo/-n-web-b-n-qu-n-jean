<?php
@session_start();
include("models/m_bai_viet.php");
class C_bai_viet
{
	function Hien_thi_bai_viet()
	{
			// Models
			$m_bai_viet=new M_bai_viet();
			$bai_viets=$m_bai_viet->Doc_bai_viet();
			
			// phan trang
			include("Pager.php");
			$p=new pager();
			$limit=8;
			$count=count($bai_viets);
			$vt=$p->findStart($limit);
			$pages=$p->findPages($count,$limit);
			$curpage=$_GET["page"];
			$lst=$p->pageList($curpage,$pages);
			
			$bai_viets=$m_bai_viet->Doc_bai_viet("",$vt,$limit);
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$bai_viets=$m_bai_viet->Doc_bai_viet($gt,$vt,$limit);
			}	
			
			// View
			
			
			$title="Quản lý Nhà Hàng";
			$tieude="Danh sách bài viết";
			$view="views/baiviet/v_bai_viet.php";
			include("include/layout.php");	
	
	}
	function Them_bai_viet()
	{
			// Models
			
			$m_bai_viet=new M_bai_viet();
			if(isset($_POST["btnCapnhat"]))
			{
				$ma_bai_viet =$_POST["ma_bai_viet"];
				$ma_loai_bai_viet =$_POST["loai_bai_viet"];
				$ma_nguoi_dung =$_POST["ma_nguoi_dung"];
				$tieu_de =$_POST["tieu_de"];
				$noi_dung_tom_tat =$_POST["tom_tat"];
				$noi_dung_chi_tiet  =$_POST["chi_tiet"];       
				$ngay_gui_bai =$_POST["ngay_gui_bai"];
				$ngay_xuat_ban =$_POST["ngay_xuat_ban"];
				$ngay_het_han =$_POST["ngay_het_han"];
				$so_lan_xem =$_POST["so_luot_xem"];
				$xuat_ban=$_POST["xuat_ban"];
				
				$kq=$m_bai_viet->Them_bai_viet($ma_bai_viet,$ma_loai_bai_viet, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, 			                $noi_dung_chi_tiet,$ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $so_lan_xem, $xuat_ban);
				if($kq)
				{
					echo "<script>alert('Thêm thành công')</script>";
					echo "<script>window.location='baiviet.php'</script>";	
				}
			}
			
			
			
			// View
			$title="Quản lý Shop Jean";
			$tieude="Thêm bài viết";
			
			
			$view="views/baiviet/v_thembaiviet.php";
			include("include/layout.php");	
	
	}
	function Sua_bai_viet()
	{		
		    $m_bai_viet=new M_bai_viet();
			// Models
			if(isset($_GET["ma_bai_viet"]))
			{
				$ma_bai_viet=$_GET["ma_bai_viet"];
				
			}
			$baivietsss=$m_bai_viet->Doc_bai_viet_theo_ma_bai_viet($ma_bai_viet);
			if(isset($_POST["btnCapnhat"])){
				
				$ma_loai_bai_viet =$_POST["loai_bai_viet"];
				$ma_nguoi_dung =$_POST["ma_nguoi_dung"];
				$tieu_de =$_POST["tieu_de"];
				$noi_dung_tom_tat =$_POST["tom_tat"];
				$noi_dung_chi_tiet  =$_POST["chi_tiet"];       
				$ngay_gui_bai =$_POST["ngay_gui_bai"];
				$ngay_xuat_ban =$_POST["ngay_xuat_ban"];
				$ngay_het_han =$_POST["ngay_het_han"];
				$so_lan_xem =$_POST["so_luot_xem"];
				$xuat_ban=$_POST["xuat_ban"];
				
				$kq=$m_bai_viet->Sua_bai_viet($ma_loai_bai_viet, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet,       			       	  $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $so_lan_xem, $xuat_ban,$ma_bai_viet);
				if($kq)
				{
					echo "<script>alert('Sửa thành công')</script>";
					echo "<script>window.location='baiviet.php'</script>";	
				}
			}
			
			// View
			
			$title="Quản lý Nhà Hàng";
			$tieude="Sửa bài viết";
			$view="views/baiviet/v_sua_bai_viet.php";
			include("include/layout.php");
	
	}
	public function Xoa_bai_viet()
	{
		$ma_bai_viet=$_GET["ma_bai_viet"];
		// Models
	
		$m_bai_viet=new M_bai_viet();
		$kq=$m_bai_viet->Xoa_bai_viet_theo_ma($ma_bai_viet);
		if($kq)
		{
			echo "<script>alert('Xóa thành công')</script>";
			echo "<script>window.location='baiviet.php'</script>";	
		}
		else
		{
			echo "<script>alert('Xóa bị lỗi.')</script>";	
		}
			
	}	
	
	
		
}
?>