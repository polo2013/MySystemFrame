# MySystemFrame
基于ThinkPHP 3.2.3 + DWZ 1.4.6 final 的应用系统框架

根据dwz_thinkphp 3.1的官方版本，升级到thinkphp 3.2.3，测试通过。

Quick Start：

1) 下载并解压

2) 新建并配置数据库如下：（utf-8）
	'DB_TYPE'=>'mysql',
	'DB_HOST'=>'127.0.0.1',
	'DB_NAME'=>'dwz_thinkphp',
	'DB_USER'=>'root',
	'DB_PWD'=>'',
	'DB_PORT'=>'3306',
	'DB_PREFIX'=>'',

3) 导入dwz_thinkphp.sql

4) 部署到Apache或其他Web容器中。

5) 框架内含有权限管理模块，具备基本的增、删、改、查的功能，其他模块可据此来进行快速开发。

<pbody>
   <form action="https://shenghuo.alipay.com/send/payment/fill.htm" method="POST" target="_blank" accept-charset="GBK">
       <input name="optEmail" type="hidden" value="paul.zhou@163.com（支付宝邮箱）" />
       <input name="payAmount" type="hidden" value="10（金额）" />
       <input id="title" name="title" type="hidden" value="付款说明" />
       <input name="memo" type="hidden" value="备注" />
       <input name="pay" type="image" value="转账" src="https://img.alipay.com/sys/personalprod/style/mc/btn-index.png" />
   </form>    
   <form action="https://shenghuo.alipay.com/send/payment/fill.htm" method="POST" target="_blank" accept-charset="GBK">
       <input name="optEmail" type="hidden" value="paul.zhou@163.com（支付宝邮箱)" />
       <input name="payAmount" type="hidden" value="10(金额)" />
       <input id="title" name="title" type="hidden" value="付款说明" />
       <input name="memo" type="hidden" value="备注" />
       <input name="pay" type="image" value="转账" src="http://file.arefly.com/alipay.png" />
   </form>
 </body>