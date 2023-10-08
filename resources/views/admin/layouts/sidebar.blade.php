 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">{{ auth()->guard('admin')->user()->name }}</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->


                 <li class="nav-item {{ in_array(\Request::route()->getName(), 
                    ['category-create','category-list','questions-list','questions-create','subject-category-create','subject-category-list']
                    ) ? " menu-open" : ""}}">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-circle"></i>
                         <p>
                             Home Page
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview ">

                        
                        <li class="nav-item {{ in_array(\Request::route()->getName(), ['category-create','category-list']) ? " menu-open" : ""}}">
                            <a href="#" class="nav-link  {{ in_array(\Request::route()->getName(), ['category-create','category-list']) ? "active" : ""}}">
  
                                <p>
                                    Service Management
                                    <i class="fas fa-angle-left right"></i>
  
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
  
                                <li class="nav-item">
                                    <a href="{{ route('category-create') }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Service</p>
                                    </a>
                                </li>
  
                                <li class="nav-item">
                                    <a href="{{ route('category-list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Service</p>
                                    </a>
                                </li>
  
                            </ul>
  
                          </li>

                        <li class="nav-item">
                          <a href="#" class="nav-link">

                              <p>
                                  Banner Management
                                  <i class="fas fa-angle-left right"></i>

                              </p>
                          </a>
                          <ul class="nav nav-treeview">

                              <li class="nav-item">
                                  <a href="{{ route('admin.modules.data.add', ['module' => 'slider']) }}"
                                      class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Add Banner</p>
                                  </a>
                              </li>

                              <li class="nav-item">
                                  <a href="{{ route('admin.modules.data', ['module' => 'slider']) }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>List Banner</p>
                                  </a>
                              </li>

                          </ul>

                        </li>
                      
                         <li class="nav-item">
                             <a href="#" class="nav-link">

                                 <p>
                                    Why Choose Us
                                     <i class="fas fa-angle-left right"></i>

                                 </p>
                             </a>
                             <ul class="nav nav-treeview">

                                 <li class="nav-item">
                                     <a href="{{ route('admin.modules.data.add', ['module' => 'choose-us']) }}"
                                         class="nav-link">
                                         <i class="far fa-circle nav-icon"></i>
                                         <p>Add Choose</p>
                                     </a>
                                 </li>

                                 <li class="nav-item">
                                     <a href="{{ route('admin.modules.data', ['module' => 'choose-us']) }}"
                                         class="nav-link">
                                         <i class="far fa-circle nav-icon"></i>
                                         <p>List Choose</p>
                                     </a>
                                 </li>

                             </ul>
                         </li>


                         <li class="nav-item">
                            <a href="#" class="nav-link">

                                <p>
                                   Faq
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('admin.modules.data.add', ['module' => 'home-page-faqs']) }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Faq</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.modules.data', ['module' => 'home-page-faqs']) }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Faq</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                     </ul>
                 </li>


                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Assignment Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link">

                                <p>
                                    Assignment
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('admin.modules.data', ['module' => 'assignment']) }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Assignment</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.modules.data', ['module' => 'assignment']) }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Assignment</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">

                                <p>
                                    How we Work
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('admin.modules.data.add', ['module' => 'how-work']) }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Work</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.modules.data', ['module' => 'how-work']) }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Work</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">

                                <p>
                                    Colleges
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('admin.modules.data', ['module' => 'collegess']) }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Colleges</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.modules.data', ['module' => 'collegess']) }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Colleges</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link">

                                <p>
                                    Category
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('admin.modules.data.add', ['module' => 'assignment-categories']) }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Category</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.modules.data', ['module' => 'assignment-categories']) }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Category</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">

                                <p>
                                    Faq
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('admin.modules.data.add', ['module' => 'help-faqs']) }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Faq</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.modules.data', ['module' => 'help-faqs']) }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Faq</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">

                                <p>
                                    Testimonials
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('admin.modules.data.add', ['module' => 'testimonials']) }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Testimonials</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('admin.modules.data', ['module' => 'testimonials']) }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Testimonials</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>


                 </li>


                 <li class="nav-item {{ in_array(\Request::route()->getName(), ['subject-create','subject-list','questions-list','questions-create','subject-category-create','subject-category-list']) ? " menu-open" : ""}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Solution Library
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ in_array(\Request::route()->getName(), ['subject-category-create','subject-category-list']) ? " active" : ""}}">

                                <p>
                                    Category
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview ">

                                <li class="nav-item">
                                    <a href="{{ route('subject-category-create') }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Category</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('subject-category-list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Category</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link {{ in_array(\Request::route()->getName(), ['subject-create','subject-list']) ? " active" : ""}}">
                                <p>
                                    Subjects
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview {{ in_array(\Request::route()->getName(), ['subject-create','subject-list']) ? " menu-open" : ""}}">

                                <li class="nav-item ">
                                    <a href="{{ route('subject-create') }}"
                                        class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Subjects</p>
                                    </a>
                                </li>

                                <li class="nav-item {{ in_array(\Request::route()->getName(), ['subject-list']) ? " active" : ""}}">
                                    <a href="{{ route('subject-list') }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Subjects</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">

                                <p>
                                    Library Colleges
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview ">

                                <li class="nav-item">
                                    <a href="#"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Colleges</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Colleges</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link">

                                <p>
                                    Course Code
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="#"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Code</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Code</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">

                                <p>
                                    Questions
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview {{ in_array(\Request::route()->getName(), ['questions-create','questions-list']) ? " menu-open" : ""}}">

                                <li class="nav-item">
                                    <a href="{{ route('questions-create') }}"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Questions</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('questions-list') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Questions</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                    </ul>


                 </li>


                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Faq
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.modules.data.add', ['module' => 'faqs']) }}"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Faq</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.modules.data', ['module' => 'faqs']) }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Faq</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.widgets_data',['page'=>'home-page-content'])}}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Home page settings
                        </p>
                    </a>
                   
                </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
