# 使用 PHPExcel 导出 Excel
<p align="center" style="color:red">（郑勇 20171111）</p>

### 导出 Excel

一般情况下使用 PHPExcel 插件导出 Excel 首先需要建一个类，用来引入 PHPExcel 并处理要导出的数据。
在我们目前的项目中一般代码如下

```
class OutPutExcel extends Service {
    public function __construct() {
        /*导入PHPExcel核心类    注意 ：PHPExcel 路径要写正确*/
        include_once('./Excel/PHPExcel.php');
        header("Content-Type: text/html;charset=utf-8");
    }
    //导出 Excel 方法，在需要导出 Excel 的 Service 文件中调用即可
    public function onOutputExportDetailList() {
        $objPHPExcel = new \PHPExcel();

        $objPHPExcel->getProperties()
        ->setCreator("zy")
        ->setLastModifiedBy("zy")
        ->setTitle("表格")
        ->setSubject("表格")
        ->setDescription("这是表格")
        ->setKeywords("excel")
        ->setCategory("result file");

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="表格.xls"');
        header('Cache-Control: max-age=0');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }
}
    
```

以上代码可以导出一个空的 Excel 文件。下面的是如何在 Excel 里面填充数据。

### 常用 Excel 操作
* 在 Excel 单元格中写入数据

```
//获取一个 Excel 中的 Sheet ，默认为 Excel 中第一个 Sheet
$objSheet = $objPHPExcel->getActiveSheet();
//通过 setCellValue 方法可以设置单元格内容，第一个参数为需要设置内容的单元格位置，第二个参数为要写入的内容
$objSheet->setCellValue('H2', '企业名称：');
```
* 给 Excel 单元格设置样式，通过 getStyle 选择要设置的单元格位置，通过 applyFromArray 传入要设置的样式的值，可以设置单元格字体，内容的位置，边框等。

```
$objSheet->getStyle('A3:J3')->applyFromArray(
            [
                'font'      => [
                    'bold' => true,
                    'size' => 11,
                    'name' => '宋体 (正文)'
                ],
                'alignment' => [
                    'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                    'vertical'   => \PHPExcel_Style_Alignment::VERTICAL_CENTER
                ],
                'borders' => [
                    'allborders' => 
                        ['style' => \PHPExcel_Style_Border::BORDER_THIN]
                ]
            ]
        );
```
* 合并单元格，合并单元格只需要调用 mergeCells 并传入要合并的单元格就可以。

```
$objSheet->mergeCells('A1:K1');
```
* 设置单元格背景填充色，A1:XFD1048576 是指设置整个表格的所有单元格的样式，Excel2007 以后，最大行为 1048576 最大列为 XFD （Excel 中 Ctrl + 右  Ctrl + 下就可以到 Excel 末尾；1048576 = 1024 * 1024  XFD = 16384 = 128 * 128）。

```
$objSheet->getStyle('A1:XFD1048576')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
$objSheet->getStyle(3)->getFill()->getStartColor()->setARGB($title_back);
```

* 创建多个 Sheet , setActiveSheetIndex 函数可以切换并创建一个新的 Sheet ，该函数返回你要操作的 Sheet 。

```
$objSheet = $objPHPExcel->setActiveSheetIndex(0);

```

