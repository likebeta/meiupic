<?php

$language   =   array(
    
'lang_name'                        =>    'English',
//core
'file_not_exists'                  =>   'File (%s) doesn\'t exist!',
'db_config_error'                  =>   'Database configuration error,please review the configuration file!',
'sqlite_not_exists'                =>   'Sqlite doesn\'t exist!',
'miss_dbname'                      =>   'Please set up the database name!',
'connect_mysql'                    =>    'Connection to Mysql (%s,%s) is failed!',
'can_not_use_db'                   =>    'Can\'t use the database %s',
'img_engine_not_exists'            =>   'The image engine(%s) doesn\'t exist!',
'storage_engine_not_exists'        =>   'The storage engine(%s) doesn\'t exist!',
'plugin_can_not_call'              =>   'The plugin(%s) can\'t call!',
'config_file_error'                =>   'Configuration file error！',
'config_file_not_exists'           =>   'Configuration file doesn\'t exist！',
'load_model_error'                 =>   'Loading model "%s" error!',
'load_lib_error'                   =>   'Loading library "%s" error!',
'pagination_tpl_not_exists'        =>   'Pagination template doesn\'t exist！',
'system_notice'                    =>    'System notice',
//page
'pageset_total'                    =>    '%s pages',
'pageset_prev'                     =>    'Previous',
'pageset_next'                     =>    'Next',
'no_records'                       =>    'No records！',

//公共
'type'                             =>  'Type',
'no_limit'                         =>  'No limit',
'config'                           =>  'Configuration',
'enable'                           =>  'Enbale',
'disable'                          =>  'Disable',
'disabled'                         =>  'Disabled',
'enabled'                          =>  'Enabled',
'not_installed'                    =>  'Not installed',
'install'                          =>  'Install',
'unkown'                           =>  'Unkown',
'manual'                           =>  'Manual',
'auto'                             =>  'Auto',
'delete'                           =>  'Delete',
'cancel'                           =>  'Cancel',
'copy'                             =>  'Copy',
'not_authorized'                   =>  'You\'re not authorized, please log in!',   
'sort'                             =>  'Sort by',
'show_nums_per_page'               =>  'Items per page',
'404_not_found'                    =>  '404! Pages not found!',
'others'                           =>  'Others',
'not_defined'                      =>  'Undefined',
'open'                             =>  'Open',
'close'                            =>  'Close',
'save'                             =>  'Save',
'modify'                           =>  'Modify',
'sel_all'                          =>  'Select all',
'no_access'                        =>  'Not accessable',
'confirm'                          =>  'Confiem',
'submit'                           =>  'Submit',
'all'                              =>  'All',
'album'                            =>  'Album',
'photo'                            =>  'Photo',
'using'                            =>  'Using',
'edit'                             =>  'Edit',
'not_set'                          =>  'Not setted',

//head
'myalbum'                          =>  'My Album',
'album_index'                      =>  'Home',
'tags_title'                       =>  'Review all tags list, find out the photo fast',
'tags'                             =>  'Tags',
'upload_photo'                     =>  'Upload photos',
'upload_photo_title'               =>  'Upload your photos',
'sys_setting'                      =>  'Setting',
'sys_setting_title'                =>  'System setting',
'trash'                            =>  'Trash',
'trash_title'                      =>  'Go to the trash',  
'login'                            =>  'Login',
'login_title'                      =>  'Login',
'profile'                          =>  'My Profile',
'profile_title'                    =>  'Review/Edit my profile',
'logout'                           =>  'Logout',
'logout_title'                     =>  'Logout',
//head html
'you_can'                          =>  'You can',
'click_to_login'                   =>  'click here to log in',
'back_to_index'                    =>  'Return to the homepage',

//notices
'no_album_notice'                  =>    'There\'s no album. Click "Create an album" to get your own album!',
'no_cate_album_notice'             => 'There\'s no album at this category, click "Create an album" to get one!',
'no_cate_album_notice_notlogin'    => 'There\'s no album at this category!',
'no_album_notice_notlogin'         => 'No albums.',
'no_photo_notice'                  =>    'No photo in this album, click "Upload new photo" to make up your album.',
'no_photo_notice_notlogin'         => 'No photos in this album!',
'no_album_search_notice'           => 'No results, pls. search with other keywords.',
'no_photo_search_notice'           => 'No results, pls. search with other keywords.',
'no_script_notice'                 =>    '<h1>No JavaScript supported, pls. change your browser setting!</h1>
<p> MeiuPic needs <strong>JavaScript</strong>. Currently all browsers can support JavaScript. You only need to change one of your browser setting to turn on this function. </p>
<p>Find it here: <a href="http://www.google.com/support/bin/answer.py?answer=23852" target="blank">How to turn on the JavaScript</a>.</p>
<p>If you have installed ads shield software, pls. set the website as allowing the JavaScript.</p>
<p>Once you turn on the JavaScript, <a href="">Click here to reload the page </a>.</p>
<p>Thank you.</p>',


//album
'create_time'                      =>  'Creation time ',
'upload_time'                      =>  'Upload time',
'photo_nums'                       =>  'Total Photos',
'album_name_empty'                 =>  'The album name can\'t be empty!',
'album_password_empty'             =>  'The password can\'t be empty!',
'album_question_empty'             =>  'The question can\'t be empty!',
'album_answer_empty'               =>  'The answer can\'t be empty!',
'create_album_success'             =>   'Create the album successfully!',
'create_album_failed'              =>  'Fail to create the album!',
'modify_album_success'             =>  'Edit the album successfully!',
'modify_album_failed'              =>  'Fail to edit the album!',
'set_cover_success'                =>'Set as the cover successfully!',
'set_cover_failed'                 =>  'Fail to set as the cover!',
'delete_album_success'             => 'Delete the album successfully!',
'delete_album_failed'              => 'Fail to delete the album!',
'pls_sel_album_to_delete'          =>'Pls. select the album to delete!',
'batch_delete_album_success'       => 'Delete batch of albums successfully!',
'batch_delete_album_failed'        => 'Fail to delete batch of albums!',
'failed_to_rename_album'           =>  'Fail to rename the album!',
'modify_tags_failed'               =>  'Fail to edit the album tags!',
'empty_album_desc'                 =>  'Album description can\'t be empty!',
'modify_album_desc_failed'         =>  'Fail to edit the album description!',
'modify_album_priv_success'        =>  'Reset album privilege successfully!',
'modify_album_priv_failed'         =>  'Fail to reset album privilege',
//album html
'total_ablum'                      =>    'Total %s albums',
'album_list'                       =>    'Album list',
'create_new_album'                 =>    'Create new album',
'notice_title'                     =>  'Notice',
'confirm_delete_album'             => 'Are you sure to delete the "%s"? The album and photos can be restored in the Trash after deleted!',
'confirm_delete_album_batch'       => 'Are you sure to delete these albums? The albums can be restored in the Trash after deleted!',
'create_album'                     =>  'Create album',
'album_name'                       =>  'Album name',
'album_desc'                       =>  'Album description',
'priv_setting'                     =>  'Privilege setting',
'type_private'                     =>   'Private',
'type_public'                      =>   'Public',
'type_passwd'                      =>   'With password',
'type_ques'                        =>   'With Q&A ',
'input_passwd'                     =>  'Enter the password',
'show_pass'                        =>  'Show the password',
'input_question'                   =>  'Enter the question ',
'input_answer'                     =>  'Enter the answer',
'input_question_tips'              =>  'eg: My name?',
'input_answer_tips'                =>  'eg: Zhangsan',
'album_tags'                       => 'Album tags',
'tags_tips'                        =>    'Seperate by the blank or comma',
'modify_album'                     =>  'Edit the album',
'move_to_trash'                    => 'Move to trash',
'move_to_trash_short'              => 'Delete',
'click_to_rename'                  => 'Click to rename',
'photos_num'                       =>  '%s photos',
'delete_selected'                  => 'Delete the selected',
'create_after_login'               => 'Create the album after login',
'view_all_album'                   =>  'View all the albums',
'in_upload_time'                   =>  'Upload on ',
'in_create_time'                   =>  'Creat on ',
'modify_album_priv'                =>  'Modify privilege',

//photo
'upload_time'                      =>  'Upload time',
'taken_time'                       =>   'Taken time',
'hits'                             =>  'Views',
'comments_nums'                    =>   'Comments',
'photo_name'                       =>  'Photo name',
'album_not_exists'                 =>   'The album you want to visit doesn\'t exist!',
'view_type'                        =>  'View mode',
'flat_mode'                        =>  'Flat',
'slide_mode'                       =>  'Slideshow',
'album_pass_error'                 =>  'The album password is error!',
'validate_success'                 =>  'Validate successfully!',
'album_answer_error'               =>  'The answer of question is wrong!',
'album_priv_error'                 =>  'The album privilege is error!',
'has_validate'                     =>  'Has validated，loading...',
'title_need_validate'              =>    'Need validate before visiting!',
'slideshow'                        =>  'Slideshow',
'search_result'                    => 'Search results',
'photo_name_empty'                 => 'The photo name can\'t be empty!',
'modify_photo_success'             =>  'Modify the photo information successfully!',
'modify_photo_failed'              =>  'Fail to modify the photo informaion!',
'havnt_sel_album'                  =>  'You haven\'t selected the album to move!',
'move_photo_success'               =>  'Move the photo successfully!',
'move_photo_failed'                =>  'Fail to move the photo!',
'pls_sel_photo_want_to_move'       =>  'Pls. select the photo to move!',
'batch_move_photo_success'         =>   'Move batch of photos successfully!',
'batch_move_photo_failed'          =>   'Fail to move batch of photos!',
'delete_photo_success'             =>  'Delete the photo successfully!',
'delete_photo_failed'              =>  'Fail to delete the photo!',
'pls_sel_photo_want_to_delete'     =>  'Pls. select the photos to delete!',
'batch_delete_photo_success'       => 'Delete batch of photos successfully!',
'batch_delete_photo_failed'        => 'Fail to delete batch of photos',
'save_photo_name_failed'           =>  'Fail to save the photo name!',
'photo_not_exists'                 =>  'The photo you want to visit doesn\'t exist!',
'no_access_view_exif'              =>  '无权查看EXIF！',
'view_photo_exif'                  => '查看照片%s的EXIF信息',
'view_exif'                        => '查看EXIF信息',
'modify_photo_tags_failed'         =>  '编辑照片标签失败！',
'empty_photo_desc'                 =>  '照片描述不能为空！',
'modify_photo_desc_failed'         =>  '编辑照片描述失败！',
'confirm_delete_photo'             =>  '确定要删除图片 “%s” 么？删除后的图片可以在“回收站”恢复！',
'confirm_delete_photo_batch'       =>  '确定要删除这些图片么？删除后的图片可以在“回收站”恢复！',
//photo html
'photo_list'                       =>    '照片列表',
'total_photo'                      =>    '共%s张图片',
'upload_new_photo'                 =>    '上传新照片',
'set_cover'                        =>  '设为封面',
'move_photo'                       =>  '移动照片',
'in_taken_time'                    =>  '拍摄于',
'view_nums'                        =>  '%s浏览',
'cover'                            =>  '封面',
'move_selected'                    =>  '移动选中项',
'all_photo_this_album'             =>   '此相册所有照片',
'click_editable'                   =>  '点击可编辑',
'no_album_desc'                    =>  '还没有描述，为相册添加描述吧！',
'no_album_tags'                    =>  '点击添加标签吧！',
'view_priv'                        =>  '访问权限',
'create_date'                      => '创建日期：',
'uploaded_date'                    => '最近上传：',
'current_album'                    =>  '当前相册',
'all_album'                        =>  '所有相册',
'go_back'                          =>  '返回页面',
'view_more_meta'                   =>  '查看照片%s的更多信息',
'modify_photo'                     =>  '修改照片信息',
'photo_name'                       =>  '照片名',
'photo_desc'                       =>  '照片描述',
'photo_tags'                       =>  '照片标签',
'move_photo'                       =>  '移动照片',
'move_photo_short'                 =>  '至相册',
'move_photo_to'                    =>  '移动照片到',
'move_photo_batch'                 =>  '批量移动照片',
'album_need_auth'                  =>  '相册“%s”需要认证',
'pls_input_passwd'                 =>  '请输入访问密码',
'question'                         =>  '问题',
'pls_input_answer'                 =>  '请输入答案',
'owner_could'                      =>  '如果您是相册拥有者，您可以',
'you_can_also'                     =>  '您也可以',
'view_photo'                       =>  '查看照片',
'photo_nav_title'                  =>   '当前第%s张，共%s张',
'back_to_photo_list'               =>  '返回照片列表',
'first_photo'                      =>  '第一张',
'prev_photo'                       =>  '上一张',
'next_photo'                       =>  '下一张',
'last_photo'                       =>  '最后张',
'slideshow_view'                   =>  '幻灯浏览',
'image_size'                       =>  '图片尺寸',
'taken_width'                      =>  '由%s拍摄',
'more_exif'                        =>  '更多Exif',
'viewed_nums'                      =>  '被查看了%s次',
'view_orgi_photo'                  =>  '查看原图',
'no_photo_desc'                    =>  '还没有描述，为照片添加描述吧！',
'no_photo_tags'                    =>  '点击添加标签吧！',
'post_comments'                    =>  '发表评论',
'this_first_photo'                 =>  '这是首张',
'this_last_photo'                  =>  '这是末张',

//tags
'tag_list'                         =>  '标签列表',
'search_tag'                       =>  '标签：%s',
//tags html
'no_tags'                          =>  '当前没有标签！',
//users
'modify_profile'                   =>  '修改个人资料',
'username_empty'                   =>  '请输入用户名！',
'userpass_empty'                   =>  '请输入密码！',
'login_success'                    =>  '登录成功！',
'username_pass_error'              =>  '请验证用户名和密码是否正确！',
'old_pass_error'                   =>  '旧密码输入错误！',
'pass_twice_error'                 =>  '两次密码输入不一致！',
'modify_success'                   =>  '修改成功！',
'modify_failed'                    =>  '修改失败！',
'pass_edit_ok'                     =>  '您的密码已经修改，请重新登录！',
'logout_success'                   =>  '退出登录成功！',


//users html
'user_login'                       =>  '用户登录',
'username'                         =>  '用户名',
'password'                         =>  '密码',
'remember_pass'                    =>  '记住密码',
'my_profile'                       =>  '我的资料',
'loginname'                        =>  '登录名',
'nickname'                         =>  '昵称',
'old_passport'                     =>  '原始密码',
'new_passport'                     =>  '新密码',
'confirm_newpass'                  =>  '确认新密码',


'photo_has_priv'                   =>  '图片设置了访问权限，您无权查看！',

'album_type_private'               =>    '私人相册',
'album_type_public'                =>    '公开相册',
'album_type_passwd'                =>    '凭密码访问',
'album_type_ques'                  =>    '凭问题答案',

//search
'search_albums'                    =>    '搜索相册',
'search_photos'                    =>    '搜索照片',
'search'                           =>    '搜索',
'search_s'                         =>    '搜索：%s',
//comments languages
'comments_num'                     =>    '%s评论',
'all_album_comments'               =>    '对该相册的评论',
'all_photo_comments'               =>    '对该照片的评论',
'comments_num'                     =>    '共%s个评论',
'email'                            =>    'Email',
'comment_user'                     =>    '评论者',
'comment_content'                  =>    '评论内容',
'album_comment_closed'             =>  '相册关闭了评论！',
'error_email'                      =>  '请输入有效的Email地址！',
'error_comment_author'             =>   '请输入评论者名字！',
'empty_content'                    =>    '内容不能为空！',
'miss_argument'                    =>    '参数丢失！',
'post_comment_success'             =>  '评论成功！',
'post_comment_failed'              =>  '评论失败！',
'reply_failed'                     =>  '回复失败！',
'delete_comment_success'           => '成功删除评论!',
'delete_comment_failed'            => '删除评论失败!',
'block_comment_success'            => '成功屏蔽评论！',
'block_comment_failed'             => '屏蔽评论失败！',
'loginwith'                        =>  '以 %s 的身份登录。',

'confirm_delete_comments'          =>  '确定要删除这条评论么？删除后无法恢复！',
'reply'                            =>  '回复',
'block'                            =>  '屏蔽',
'approve'                          =>  '获准',
'load_more_comments'               =>  '载入更多评论',
'comments_manage_title'            => '评论管理',
'comments_manage'                  => '评论管理',
'comments_manage_list_title'       => '评论列表',
'no_comments'                      =>  '当前还没有评论！',
'approve_comment_success'          =>  '审核评论成功！',
'approve_comment_failed'           =>  '审核评论失败！',
'pls_sel_comments_want_to_delete'  =>    '请选择需要删除的评论！',
'batch_delete_comments_success'    =>    '批量删除评论成功！',
'batch_delete_comments_failed'     =>    '批量删除评论失败！',
'pls_sel_comments_want_to_block'   =>    '请选择需要屏蔽的评论！',
'batch_block_comments_success'     =>    '批量屏蔽评论成功！',
'batch_block_comments_failed'      =>    '批量屏蔽评论失败！',
'pls_sel_comments_want_to_approve' =>    '请选择需要获准的评论！',
'batch_approve_comments_success'   =>    '批量获准评论成功！',
'batch_approve_comments_failed'    =>    '批量获准评论失败！',
'confirm_approve_comments_batch'   =>  '确定要获准这些评论么？仔细检查后按确定。',
'confirm_block_comments_batch'     =>  '确定要屏蔽这些评论么？屏蔽后游客将无法看到这些评论！',
'confirm_delete_comments_batch'    =>  '确定要删除这些评论么？删除后将无法恢复。',
'moderated'                        =>  '待审',
'blocked'                          =>  '已屏蔽',
'approved'                         =>  '已获准',
'reply_to'                         =>  '回应给',
'block_selected'                   =>  '屏蔽选中项',
'approve_selected'                 =>  '获准选中项',
'posted_at'                        =>  '提交于',
'replyed_to'                       =>  '回复给',

//trash
'recycle'                          =>  '回收站',
'real_delete_success'              =>  '彻底删除成功！',
'real_delete_failed'               =>  '彻底删除失败！',
'pls_sel_photo_album_del'          =>  '请先选择要彻底删除的照片/相册！',
'real_delete_batch_success'        =>  '成功批量删除！',
'restore_success'                  =>  '成功还原！',
'restore_failed'                   =>  '还原失败！',
'pls_sel_photo_album_restore'      =>  '请先选择要还原的照片/相册！',
'restore_batch_success'            =>  '成功批量还原！',
'empty_trash_success'              =>  '成功清空回收站!',
//trash html
'trash_is_empty'                   =>  '您的回收站是空的！',
'clear_recycle'                    =>  '清空回收站',
'real_delete'                      =>  '彻底删除',
'restore'                          =>  '还原',
'real_delete_selected'             =>  '彻底删除选中项',
'restore_selected'                 =>  '还原选中项',
'no_album_in_trash'                =>  '回收站中没有已删除的相册！',
'no_photo_in_trash'                =>  '回收站中没有已删除的照片！',
'confirm_real_delete'              =>  '确定要彻底删除 “%s” 么？删除后无法恢复！',
'confirm_real_delete_batch'        => '确定要删除这些图片/相册么？删除后的无法恢复！',
'confirm_emptying_trash'           => '确定清空回收站么？删除后的无法恢复！',
'confirm_restore_batch'            =>  '确定要还原这些图片/相册么？',

//upload
'pls_login_before_upload'          =>  '请先登录后上传',
'pls_sel_album'                    =>  '请先选择相册！',
'upload_photo_success'             =>  '上传照片成功！',
'view_album'                       =>  '查看相册',
'need_sel_upload_file'             =>  '您没有选择图片上传，请重新上传！',
'file_upload_failed'               =>  '文件%s上传失败！',
'failed_larger_than_server'        =>  '文件%s上传失败:文件大小超过服务器限制！',
'failed_larger_than_usetting'      =>  '文件%s上传失败:大小超过用户限制！',
'failed_if_file'                   =>  '文件%s上传失败:请确认上传的是否为文件！',
'failed_not_support'               =>  '文件%s上传失败:不支持此格式！',
//u html
'switch_upload_type'               =>  '切换上传方式',
'expert_mode'                      =>  '高级上传',
'normal_mode'                      =>  '普通模式',
'select_album'                     =>  '选择相册',
'new_album'                        =>  '新建相册',
'upload_immediatly'                =>  '立即上传',
'loading'                          =>  '载入中...',
'if_no_response_click_here'        =>  '如果长时间没有响应，可以点此处切换至普通上传方式！',
'must_upload_one'                  =>  '至少选择一个文件上传.',
'filename'                         =>  '文件名',
'status'                           =>  '状态',
'size'                             =>  '大小',
'add_file'                         =>  '添加图片',
'stop_upload'                      =>  '停止上传',
'start_upload'                     =>  '开始上传',
'upload_status'                    =>  '已上传 %%d/%%d 图片',
'drag_file_here'                   =>  '拖拽文件至此处.',
'Failed to save file.'             =>  '文件上传失败！',

//Exif languages
'exif_Make'                        => '相机品牌',
'exif_Model'                       => '相机型号',
'exif_ApertureFNumber'             => '光圈',
'exif_ExposureTime'                => '曝光时间',
'exif_Flash'                       => '闪光灯',
'exif_FocalLength'                 => '焦距',
'exif_FocalLengthIn35mmFilm'       => '35mm等效焦距',
'exif_ISOSpeedRatings'             => 'ISO感光度',
'exif_WhiteBalance'                => '白平衡',
'exif_ExposureBiasValue'           => '曝光补偿',
'exif_DateTimeOriginal'            => '拍摄时间',
'exif_FocusDistance'               => '对焦距离',
'exif_FileSize'                    => '文件大小',
'exif_MimeType'                    => '文件类型',
'exif_Width'                       => '图片宽度',
'exif_Height'                      => '图片高度',
'exif_Orientation'                 => '方向',
'exif_XResolution'                 => '水平分辨率',
'exif_YResolution'                 => '垂直分辨率',
'exif_ResolutionUnit'              => '分辨率单位',
'exif_Software'                    => '创建软件',
'exif_DateTime'                    => '修改时间',
'exif_Artist'                      => '作者',
'exif_Copyright'                   => '版权',
'exif_MaxApertureValue'            => '最大光圈',
'exif_FNumber'                     => 'F-Number',
'exif_MeteringMode'                => '测光模式',
'exif_LightSource'                 => '光源',
'exif_ColorSpace'                  => '色彩空间',
'exif_ExposureMode'                => '曝光模式',
'exif_ExposureProgram'             => '曝光程序',
'exif_DateTimeDigitized'           => '数字化时间',

'standard_procedure'               =>  '标准程序',
'aperture_priority'                =>  '光圈先决',
'shutter_priority'                 =>  '快门先决',
'depth_priority'                   =>  '景深先决',
'sport_mode'                       =>  '运动模式',
'portrait_mode'                    =>  '肖像模式',
'landscape_mode'                   =>  '风景模式',
'top_left'                         =>  '上/左',
'top_right'                        =>  '上/右',
'bottom_right'                     =>  '下/右',
'bottom_left'                      =>  '下/左',
'left_top'                         =>  '左/上',
'right_top'                        =>  '右/上',
'right_bottom'                     =>  '右/下',
'left_bottom'                      =>  '左/下',
'in-ch'                            =>  '英寸',
'cm'                               =>  '厘米',

'avg'                              => "平均",
'center_weighted_average'          => "中央重点平均测光",
'point_measurement'                =>  "点测",
'zoning'                           =>  "分区",
'assess'                           =>  "评估",
'portion'                          =>  "局部",
'sun_light'                        =>  "日光",
'fluorescent'                      =>  "荧光灯",
'tungsten'                         =>  "钨丝灯",
'flash_lamp'                       =>  "闪光灯",
'standard_lighting_A'              => "标准灯光A",
'standard_lighting_B'              => "标准灯光B",
'standard_lighting_C'              => "标准灯光C",
'd55'                              => "D55",
'd65'                              => "D65",
'd75'                              => "D75",

'open1'                            =>          "打开(不探测返回光线)",
'open2'                            =>          "打开(探测返回光线)",
'open3'                            =>          "打开(强制)",
'open4'                            =>          "打开(强制/不探测返回光线)",
'open5'                            =>          "打开(强制/探测返回光线)",
'open6'                            =>          "关闭(强制)",
'close1'                           =>           "关闭(自动)",
'open7'                            =>          "打开(自动)",
'open8'                            =>          "打开(自动/不探测返回光线)",
'open9'                            =>          "打开(自动/探测返回光线)",
'no_flash'                         =>             "没有闪光功能",
'open10'                           =>           "打开(防红眼)",
'open11'                           =>           "打开(防红眼/不探测返回光线)",
'open12'                           =>           "打开(防红眼/探测返回光线)",
'open13'                           =>           "打开(强制/防红眼)",
'open14'                           =>           "打开(强制/防红眼/不探测返回光线)",
'open15'                           =>           "打开(强制/防红眼/探测返回光线)",
'open16'                           =>           "打开(自动/防红眼)",
'open17'                           =>           "打开(自动/防红眼/不探测返回光线)",
'open18'                           =>           "打开(自动/防红眼/探测返回光线)",

//setting
'system_setting'                   =>  '系统设置',
'basic_setting'                    =>  '基本设置',
'empty_site_name'                  =>  '站点名称不能为空！',
'empty_site_url'                   =>  '相册URL不能为空！',
'save_setting_success'             =>  '保存设置成功！',
'save_setting_failed'              =>  '保存设置失败！',
'upload_setting'                   =>  '上传设置',
'resize_width_error'               =>  '图片的最大宽度不能为空，并且必须为数字！',
'resize_height_error'              =>  '图片的最大高度不能为空，并且必须为数字！',
'resize_quality_error'             =>  '图片质量必须介于1-100！',
'watermark_setting'                =>  '水印设置',
'water_mark_image_error'           =>  '图片水印地址不能为空！',
'water_mark_opacity_error'         =>  '水印透明度必须介于0-100！',
'water_mark_string_error'          =>  '水印文字内容不能为空！',
'water_mark_fontsize_error'        =>  '水印文字大小必须大于1！',
'water_mark_color_error'           =>  '水印文字颜色不是有效的颜色！',
'water_mark_font_error'            =>  '请选择水印文字字体！',
'water_mark_angle_error'           =>  '水印文字角度必须在0-360度之间！',
'water_mark_opacity_error'         =>  '水印透明度必须介于0-100！',
'upload_error'                     =>  '上传失败！',
'theme_setting'                    =>  '主题设置',
'enable_success'                   =>  '启用成功！',
'empty_theme'                      =>  '请确认要删除的主题是否存在！',
'can_not_delete_default'           =>  '默认主题不能删除！',
'theme_is_using'                   =>  '此主题正在使用中，无法删除！',
'delete_theme_success'             =>  '成功删除主题！',
'delete_theme_failed'              =>  '删除主题失败！',
'user_theme'                       =>  '用户主题',
'plugin_setting'                   =>  '插件管理',
'install_plugin_success'           =>  '安装插件成功！',
'install_plugin_failed'            =>  '安装插件失败！',
'enable_plugin_success'            =>  '启用插件成功！',
'enable_plugin_failed'             =>  '启用插件失败！',
'stop_plugin_success'              =>  '停用插件成功！',
'stop_plugin_failed'               =>  '停用插件失败！',
'remove_plugin_success'            =>  '删除插件成功！',
'remove_plugin_failed'             =>  '删除插件失败！',
'system_info'                      =>  '系统信息',
'clear_cache_success'              =>  '清空缓存成功！',

'site_title_label'                 =>  '站点名称',
'site_title_tips'                  =>  '显示在每个页面的最顶端',

'site_url_label'                   =>  '你的相册URL',
'site_url_tips'                    =>  '图片地址时及超链接的前缀，请保留最后的"/"',
'site_keywords_label'              =>  '你的相册默认关键字',
'site_keywords_tips'               =>  '便于搜索引擎抓取，meta keywords',
'site_logo_label'                  =>  '相册LOGO',
'site_logo_tips'                   =>  '显示于页面左上角，请上传logo或填入logo的相对地址',

'site_description_label'           =>  '你的相册描述',
'site_description_tips'            =>  '便于搜索引擎抓取，meta description',
'site_footer_label'                =>  '页面底部代码',
'site_footer_tips'                 =>  '可以插入备案号，统计代码等，支持html',
'show_process_info_label'          =>  '显示页脚程序运行信息',
'show_process_info_tips'           =>  '包括页面执行时间和数据库请求次数',
'enable_comment_label'             =>  '是否允许评论',
'enable_comment_tips'              =>  '如果关闭此选项，用户无法对所有相册/照片进行评论',
'gravatar_url_label'               =>  'Gravatar头像地址设置',
'gravatar_url_tips'                =>  '系统将自动替换{idstring}为相应的gravatar_id',

'save_setting'                     =>  '保存设置',
'cache_size'                       =>  '缓存大小：',
'clear_all_cache'                  =>  '清空所有缓存',
'more_system_info'                 =>  '更多系统信息',
'edit_plugin_setting'              =>  '编辑插件配置',
'in_safe_mode'                     =>  '您当前处在安全模式，所有插件均未生效，若想使用插件请关闭安全模式！',
'no_plugins'                       =>  '没有任何可用的插件！',
'plugin_id'                        =>  '插件id',
'plugin_name'                      =>  '插件名',
'plugin_desc'                      =>  '插件介绍',
'version'                          =>  '版本',
'developer'                        =>  '开发者',
'status'                           =>  '状态',
'operate'                          =>  '操作',
'confirm_delete_theme'             =>  '确定要删除主题 “%s” 么？',
'edit_style'                       =>  '编辑风格',
'enable_pre_resize_label'          =>  '是否开启客户端预处理',
'enable_pre_resize_tips'           =>  '启用此选项，在高级模式下会自动将大图片缩小，然后再上传，有利于大大减少网络传输，缩短上传时间。',
'upload_resize_width_label'        =>  '图片的最大宽度',
'upload_resize_width_tips'         =>  '客户端预处理图片的最大宽度',
'upload_resize_height_label'       =>  '图片的最大高度',
'upload_resize_height_tips'        =>  '客户端预处理图片的最大高度',
'upload_resize_quality_label'      =>  '图片质量',
'upload_resize_quality_tips'       =>  '客户端预处理图片的质量 1-100',
'upload_allow_size_label'          =>  '允许上传的图片大小',
'upload_allow_size_tips'           =>  '请谨慎选择，如果空间服务商配置有限制，尺寸过大可能会导致系统瘫痪，高级上传不受影响',
'watermark_type_label'             =>  '是否启用水印',
'watermark_type_tips'              =>  '启用此选项，会在每张上传的图片上打上水印，可以防止别人盗用图片。',
'enable_img_wm'                    =>  '启用图片水印',
'enable_font_wm'                   =>  '启用文字水印',
'water_mark_image_label'           =>  '图片水印地址',
'water_mark_image_tips'            =>  '请上传水印图片，或填入水印图片的相对地址',
'upload'                           =>  '上传',
'view'                             =>  '查看',
'water_mark_string_label'          =>  '水印文字',
'water_mark_string_tips'           =>  '水印文字内容',
'water_mark_font_label'            =>  '水印文字字体',
'water_mark_font_tips'             =>  '请把所需的字体文件上传到相册服务器根目录下的/statics/font文件夹中，字体文件位于本机C:\WINDOWS\Fonts下，例如文件SimSun.ttc表示宋体',
'water_mark_fontsize_label'        =>  '水印文字大小',
'water_mark_fontsize_tips'         =>  '水印文字大小设置，单位为px',
'water_mark_color_label'           =>  '水印文字颜色',
'water_mark_color_tips'            =>  '请使用HEX颜色代码。如:#332211',
'water_mark_angle_label'           =>  '水印角度',
'water_mark_angle_tips'            =>  '角度可取值范围为0-360度，逆时针方向（即如果值为 90 则表示从下向上阅读文本）',
'water_mark_opacity_label'         =>  '水印透明度',
'water_mark_opacity_tips'          =>  '透明度请设置为0-100之间的数字，0代表完全透明，100代表不透明。若水印图片本身透明请填0',
'water_mark_pos_label'             =>  '水印位置',
'water_mark_pos_label'             =>  '设置水印位置',
'pos_topleft'                      =>  '顶部居左',
'pos_topcenter'                    =>  '顶部居中',
'pos_topright'                     =>  '顶部居右',
'pos_centerleft'                   =>  '左部居中',
'pos_center'                       =>  '图片中心',
'pos_centerright'                  =>  '右部居中',
'pos_bottomleft'                   =>  '底部居左',
'pos_bottomcenter'                 =>  '底部居中',
'pos_bottomright'                  =>  '底部居右',
'pos_random'                       =>  '随机',

'language_and_locale'              =>  '区域语言设置',
'system_language_label'            =>  '选择系统语言',
'system_language_tips'             =>  '如果没有您要的语言可以从meiupic.meiu.cn下载相应的语言包',
'system_timeoffset_label'          =>  '选择时区',
'system_timeoffset_tips'           =>  '请选择所在地的时区',
'empty_langset'                    =>  '请选择语言！',
'empty_timezone'                   =>  '请选择时区！',

//系统信息
'meiupic_version'                  =>  '相册系统版本',
'operate_system'                   =>  '操作系统',
'server_software'                  =>  '服务器软件',
'php_runmode'                      =>  'php运行模式',
'php_version'                      =>  'php版本',
'mysql_support'                    =>  '是否支持Mysql',
'mysqli_support'                   =>  '是否支持Mysqli',
'sqlite_support'                   =>  '是否支持Sqlite',
'database_version'                 =>  '数据库及版本',
'gd_info'                          =>  'GD库',
'imagick_support'                  =>  'Imagick扩展',
'exif_support'                     =>  'Exif支持',
'zlib_support'                     =>  '是否支持Zlib',
'support'                          =>  '支持',
'notsupport'                       =>  '不支持',

'nothing_to_do'                    =>  '未做任何操作！',
'recounter_success'                =>  '更新统计成功！',
'recounter'                        =>  '更新统计',
'comment_recounter'                =>  '评论数重计',
'photo_recounter'                  =>  '照片数重计',
'tag_recounter'                    =>  '标签数重计',
'check_update'                     =>  '检查更新',
'connect_to_server_failed'         =>  '连接服务器失败！',

'sel_album_to_upload'              => '选择要上传的相册',
'you_chose_album'                  => '您选择了相册',
'back_to_re_select'                => '返回重选',

//翻转图片
'rotate_image'                     => '旋转图片',
'rotate_image_short'               => '旋转',
'rotate_left_90'                   => '向左旋转90°',
'rotate_right_90'                  => '向右旋转90°',
'do_nothing'                       => '您没有做任何操作！',
'rotate_image_success'             => '旋转图片成功！',
'rotate_image_failed'              => '旋转图片失败！',

//重新上传
'new_photo'                        => '新照片',
'reupload_photo'                   => '重新上传照片',
'reupload_photo_short'             => '重新上传',

//分类
'category'                         => '分类',
'category_list'                    => '分类列表',
'all_category'                     => '所有分类',
'create_category_succ'             => '创建分类成功！',
'create_category_fail'             => '创建分类失败！',
'edit_category_succ'               => '编辑分类成功！',
'edit_category_fail'               => '编辑分类失败,上级分类不能是自己或子分类!',
'confirm_delete_category'          => '确定要删除分类“%s”吗？分类下的相册将自动移动到未分类相册！',
'create_category'                  => '创建分类',
'create_sub_category'              => '创建子分类',
'category_name'                    => '分类名',
'parent_category'                  => '上级分类',
'no_parent'                        => '无上级',
'back_to_manage_album'             => '返回相册管理',
'delete_cate_succ'                 => '删除分类成功！',
'delete_cate_fail'                 => '删除分类失败！',
'not_cate'                         => '未分类',
'belong_category'                  => '所属的分类',
'add_to_nav'                       => '添加到菜单',
//自定义菜单
'setting_nav'                      => '自定义菜单',
'delete?'                          => '删?',
'add_menu'                         => '添加菜单',
'nav_sort'                         => '排序',
'nav_name'                         => '名称',
'nav_url'                          => '链接',
'nav_inside'                       => '内置',
'nav_custom'                       => '自定义',
'nav_save_succ'                    => '保存成功！',
'nav_save_fail'                    => '部分内容保存失败，请确认是否内容都填写正确了！',
'no_cate_album'                    => '未分类相册',

//分享按钮提示设置
'share_title_label'                => '自定义分享内容设置',
'share_title_tips'                 => '{name}为照片名',

'side_category'                    => '按分类筛选相册',
'share_title'                      => '分享张很赞的照片:{name}',

//自动升级
'your_system_is_up_to_date'        => '您的系统是最新的！',
'new_update_available'             => '检测到新的版本：<span class="alertcolor">%s</span> ,发布日期：<span class="alertcolor">%s</span> ！',
'update_immediately'               => '立刻升级',
'no_need_to_update'                => '无需升级！',
'version_can_not_be_empty'         => '版本号不能为空！',
'dir_not_writable'                 => '目录：%s 不可写！',
'file_not_writable'                => '文件：%s 不可写！',
'file_has_been_downloaded'         => '文件已下载！',
'download_package_failed'          => '下载升级包失败！',
'download_package_succ'            => '下载文件成功！',
'unzip_package_succ'               => '解压文件成功！',
'delete_tmp_download_file'         => '删除下载的临时文件！',
'upgrade_after_jump'               => '跳转后执行升级脚本！',
'get_update_fail'                  => '获取更新失败！',
'have_been_updated'                => '已经升级过了！',
'could_not_degrade'                => '脚本无法执行降级操作！',
'too_old_to_update'                => '对不起, 您的版本太旧！无法自动升级！',
'upgrade_success'                  => '升级成功，跳转至首页！',
'click_to_jump'                    => '点击此处跳转',
);