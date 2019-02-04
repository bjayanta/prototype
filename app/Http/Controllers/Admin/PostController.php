<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\Term;
use App\Models\User\User;
use App\Models\Location\Division;
use DateTime;
use DB;
use Session;

class PostController extends Controller
{

    public function __construct() {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = Post::all();
        return view('admin.post.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $companies = User::where('account_type', 'general')->get(['id', 'name']);
        $divisions = Division::all(['id', 'english']);
        $tags = Term::where('genus', 'tag')->get();
        $organizations = Term::where('genus', 'corporate-organization-type')->get();
        $natureis = Term::where('genus', 'nature')->get();
        $levels = Term::where('genus', 'job-level')->get();
        $experiences = Term::where('genus', 'experience')->get();
        $job_categories = Term::where('genus', 'category')->get();

        $salaries = config('maxsop.post.salary');

        return view('admin.post.create', compact('tags', 'job_categories', 'companies', 'divisions', 'organizations', 'natureis', 'levels', 'experiences'))
        ->with('salaries', $salaries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return $request->all();

        $this->validate($request, [
          'title'                                   => 'required',
          'subtitle'                            => 'required',
          'category_id'                     => 'required',
          'subcategory_id'              => 'required',
          'location'                            => 'required',
          'organization_id'                          => 'required',
          'vacancy'                           => 'required',
          'nature'                              => 'required',
          'age'                                     => 'required',
          'gender'                              => 'required',
          'published_at_date'         => 'required',
          'published_at_month'    => 'required',
          'published_at_year'       => 'required',
          'source'                             => 'required',
          'terms_id'                         => 'required',
          'popular_job'                   => 'required',
          'admit_notification'       => 'required',
        ]);

        $gender = join($request->gender);

        $published_at = DateTime::createFromFormat('j-n-Y', $request->published_at_date.'-'.$request->published_at_month.'-'. $request->published_at_year);
        $deadline = DateTime::createFromFormat('j-n-Y', $request->deadline_date.'-'.$request->deadline_month.'-'. $request->deadline_year);

        $post = new Post;
        $post->user_id = 1;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->description = $request->description;
        $post->vacancy = $request->vacancy;
        $post->age = $request->age;
        $post->gender = $gender;
        $post->nature = $request->nature;
        $post->level = $request->level;
        $post->salary = $request->salary;
        $post->location = $request->location;
        $post->education = $request->education;
        $post->experience = $request->experience;
        $post->source = $request->source;
        $post->status = 0;
        $post->published_at = $published_at;
        $post->deadline = $deadline;
        $post->save();

        $post_metas = array();

        //company
          $post_metas['company_id'] = $request->company_id;
        //category
          $post_metas['category_id'] = $request->category_id;
        //subcategory        
          $post_metas['subcategory_id'] = $request->subcategory_id;      
        //designation        
          $post_metas['designation'] = $request->designation;
        //genus        
          $post_metas['organization_id'] = $request->organization_id;
        //application_fee
          $post_metas['application_fee'] = $request->application_fee;
        //online_apply_url
          $post_metas['online_apply_url'] = $request->online_apply_url;
        //apply_instructions
          $post_metas['apply_instructions'] = $request->apply_instructions;
        //popular_job
          $post_metas['popular_job'] = $request->popular_job;
        //admit_notification
          $post_metas['admit_notification'] = $request->admit_notification;
        //meta title
            $post_metas['meta_title'] = $request->meta_title;
        //meta description
            $post_metas['meta_description'] = $request->meta_description;
        //meta keyword
            $post_metas['meta_keyword'] = $request->meta_keyword;
            
        if (count($post_metas) > 0) {
            foreach ($post_metas as $key => $post_meta) {
                  DB::table('postmeta')->insert(['post_id' => $post->id, 'meta_key' => $key, 'meta_value' => $post_meta,
                ]);
            }
        }

        $post->terms()->sync($request->terms_id);
        Session::flash('message', 'Post saved successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
