<?php
namespace app\index\controller;
use think\Controller;  //用于与V层进行数据传递
use app\model\Teacher;   //引用教师模型
/**
 * 教师管理，继承think\Controller后，就可以利用V层对数据进行打包了。
 */
class TeacherController extends Controller
{	
	public function index()
	{
		try{
			// $Teacher 首写字大写，说明它是一个对象, 更确切一些说明这是基于Teacher这个模型被我们手工实例化的，如果存在teacher数据表的话，它对应teacher数据表
			$Teacher = new Teacher;

			 // $teachers 以s结尾，表示它是一个数组，数据中的每一项都是一个对象，这个对象基于Teahcer这个模型。
			$teachers = $Teacher->select();

			//向V层传递数据
			$this->assign('teachers',$teachers);

			//取回V层打包的数据
			$htmls = $this->fetch();

			//将数据返回给用户
			return $htmls;
		}catch(\Exception $e){
			// 由于对异常进行了处理，如果发生了错误，我们仍然需要查看具体的异常位置及信息，那么需要将以下代码的注释去掉。
            // throw $e;
			return '系统错误'.getMessage();	
		}
		
	}

	public function insert()
	{
		$message    = '';   // 反馈消息
        $error      = '';   // 反馈错误信息
		try{
			//实例化控模型，写入数据
			$teacher = new Teacher;
			$teacher->name = input('post.name');
			$teacher->username = input('post.username');
			$teacher->sex = input('post.sex');
			$teacher->email = input('post.email');

			//反馈结果
			if(false === $teacher->validate(true)->save())
			{
				$error = '新增失败：'.$Teacher->getError();
			} else
			{
				$message = $teacher->name.'新增成功';
			}
		}catch(\Exception $e){
			$error = '系统错误'.$e->getMessage();
		}

		// 判断是否发生错误，返回不同信息。
        if ($error === '')
        {
            return $this->success($message, url('index'));
        } else {
            return $this->error($error);
        }
		
	}

	public function add()
	{
		try{
			$htmls = $this->fetch();
			return $htmls;
		}catch(\Exception $e){
			return '系统错误'.$e->getMessage();
		}
	}

	//http://localhost/thinkphp5/public/index/teacher/delete
	public function delete()
	{
		$message = ''; //反馈正确消息
		$error = '';   //反馈错误消息

		try{
				//接收id，并转换为int类型
				$id = input('get.id/d');
			
				//直接删除相关关键字记录
				if($count = Teacher::destroy($id))
				{
					$message = '成功删除'.$count.'条数据';
				} else{
					$error = '删除失败';
				}
			} catch(\Exception $e){
			$error = '系统错误'.$e->getMessage();
			}
		
		//进行跳转,success()方法存在于think\Controller中，只要在C层中继承了这个类，便直接可以调用。功能：用于页面间的跳转。
		if($error ==='')
		{
			return $this->success($message,url('index'));
		} else{
			return $this->error($error,url('index'));
		}
	}

    public function edit()
    {
    	try{
    		// 获取传入ID
	    	$id = input('get.id/d');

	        // 在Teacher表模型中获取当前记录
	        if(false === $teacher = Teacher::get($id))
	        {
	        	return '系统未找到ID为'.$id.'的记录';
	        }
	        
	        // 将数据传给V层
	        $this->assign('teacher',$teacher);

	        // 获取封装好的V层内容
	        $htmls = $this->fetch();

	        // 将封装好的V层内容返回给用户
	        return $htmls;
    	} catch(\Exception $e)
    	{
    		return '系统错误'.getMessage();
    	}              
    }

     public function update()
    {
       try
        {
            // 接收数据，取要更新的关键字信息
            $id = input('post.id');

            // 获取当前对象
            $teacher = Teacher::get($id);

            // 写入要更新的数据
            $teacher->name = input('post.name');
            $teacher->username = input('post.username');
            $teacher->sex = input('post.sex');
            $teacher->email = input('post.email');

            // 更新
            $message = '更新成功';
            if (false === $teacher->validate(true)->save())
            {
                $message =  '更新失败' . $teacher->getError();
            }

        } catch (\Exception $e)
        {
            // 由于对异常进行了处理，如果发生了错误，我们仍然需要查看具体的异常位置及信息，那么需要将以下的代码的注释去掉
            // throw $e;
            $message = $e->getMessage();
        }

        return $message;
    }
}