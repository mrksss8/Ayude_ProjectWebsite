<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Financing;
use App\Models\Language;

class FinancingController extends Controller
{


    public function index($lang)
    {
        $item = Language::where('id',$lang)->with('financing')->first();
        $lists = Financing::where('language_id',$lang)->where('page_title_1_list','list')->with('language')->get('page_title_1_sub_header1_list1');
        $cards = Financing::where('language_id',$lang)->where('page_title_2_sub_header1_card','card')->with('language')->get(['page_title_2_sub_header1_card_head','page_title_2_sub_header1_card_description','page_title_2_sub_header1_card_image']);
        if($item->financing){
          return view('frontend.landing_pages.financing',compact('item','lists','cards'));
        } else {
          return view('frontend.landing_pages.empty-page',compact('item','lists','cards'));
        }
    }
    
    public function show($lang_id){

        $financing = Financing::where('language_id',$lang_id)->with('language')->first();
        $lists = Financing::where('language_id',$lang_id)->where('page_title_1_list','list')->with('language')->get('page_title_1_sub_header1_list1');
        $cards = Financing::where('language_id',$lang_id)->where('page_title_2_sub_header1_card','card')->with('language')->get(['page_title_2_sub_header1_card_head','page_title_2_sub_header1_card_description','page_title_2_sub_header1_card_image']);
        $languages = language::all();
        $current_language = language::where('id',$lang_id)->first();

        return view('backend.dashboard_pages.financing.show',compact('languages','financing','lists','cards','lang_id','current_language'));

    }

    public function create($lang_id)
    {   

        $language = language::findorfail($lang_id);
        return view('backend.dashboard_pages.financing.create',compact('language'));

    }


    public function store(Request $request){
    
         Financing::create([
            "language_id" => $request->language_id, 
            "page_title_1" => $request->page_title_1,  
            "page_title_1_paragraph1" => $request->page_title_1_paragraph1,  
            "page_title_1_sub_header1" => $request->page_title_1_sub_header1,  
            "page_title_1_paragraph2" => $request->page_title_1_paragraph2,  
            "page_title2" => $request->page_title2,  
            "page_title_2_paragraph" => $request->page_title_2_paragraph,  
            "page_title_2_sub_header1" => $request->page_title_2_sub_header1,  
            "page_title_2_sub_header1_description" => $request->page_title_2_sub_header1_description,  
            "page_title_2_sub_header2" => $request->page_title_2_sub_header2,  
            "page_title_2_sub_header2_description" => $request->page_title_2_sub_header2_description,  
            "page_title_2_sub_header3" => $request->page_title_2_sub_header3,  
            "page_title_2_sub_header3_description" => $request->page_title_2_sub_header3_description,
            "page_title_2_sub_header4" => $request->page_title_2_sub_header4,  
            "page_title_2_sub_header4_description" => $request->page_title_2_sub_header4_description,
         ]

         );

        $list = $request->page_title_1_sub_header1_list1;
     
         for($i = 0; $i<count($list); $i++)
         {
            $lists = [
             [       
                'page_title_1_sub_header1_list1' =>$request->page_title_1_sub_header1_list1[$i],
                'page_title_1_list' => 'list',
                "language_id" => $request->language_id,
                 ]
             ];   
             Financing::insert($lists);
         }

         
        //  $card= $request->page_title_2_sub_header1_card_head;
        //  for($i = 0; $i<count($card); $i++)
        //  {
        //     $image = $request->file('page_title_2_sub_header1_card_image')[$i]->getClientOriginalName();
        //     $path = $request->file('page_title_2_sub_header1_card_image')[$i]->storeAs('financing',  $image, 'public');


        //     // $request->page_title_2_sub_header1_card_image[$i]
        //     $cards = [
        //      [       
        //         "page_title_2_sub_header1_card" => 'card',
        //         "page_title_2_sub_header1_card_head" => $request->page_title_2_sub_header1_card_head[$i],  
        //         "page_title_2_sub_header1_card_description" => $request->page_title_2_sub_header1_card_description[$i],  
        //         "page_title_2_sub_header1_card_image" => $image,  
        //         "language_id" => $request->language_id,
        //          ]
        //      ];   
        //      Financing::insert($cards);
        //  }



         foreach($request->page_title_2_sub_header1_card_head as $key => $page_title_2_sub_header1_card_headdd){


            $image = $request->file('page_title_2_sub_header1_card_image')[$key]->getClientOriginalName();
            $path = $request->file('page_title_2_sub_header1_card_image')[$key]->storeAs('financing',  $image, 'public');      
    
            Financing::create([
                'page_title_2_sub_header1_card' => 'card',
                'page_title_2_sub_header1_card_head' => $page_title_2_sub_header1_card_headdd,  
                'page_title_2_sub_header1_card_description' => $request->page_title_2_sub_header1_card_description[$key],  
                'page_title_2_sub_header1_card_image' => $image,  
                'language_id' => $request->language_id,
            ]);

            }
            return redirect()->route('financing.show', $request->language_id);
        }
        public function edit($lang_id)
            {

                $financing = Financing::where('language_id',$lang_id)->with('language')->first();
                $financing_lists = Financing::where('language_id',$lang_id)->where('page_title_1_list','list')->with('language')->get();
                $financing_cards = Financing::where('language_id',$lang_id)->where('page_title_2_sub_header1_card','card')->with('language')->get();
                return view('backend.dashboard_pages.financing.edit',compact('financing','financing_lists','financing_cards'));

        }

        public function update(Request $request, $lang_id)
        {   

            // dd($request->page_title_1_sub_header1_list1);
        financing::where('language_id', $lang_id)->update([
            "language_id" => $request->language_id, 
            "page_title_1" => $request->page_title_1,  
            "page_title_1_paragraph1" => $request->page_title_1_paragraph1,  
            "page_title_1_sub_header1" => $request->page_title_1_sub_header1, 
            "page_title_1_paragraph2" => $request->page_title_1_paragraph2,  
            "page_title2" => $request->page_title2,  
            "page_title_2_paragraph" => $request->page_title_2_paragraph,  
            "page_title_2_sub_header1" => $request->page_title_2_sub_header1,  
            "page_title_2_sub_header1_description" => $request->page_title_2_sub_header1_description,  
            "page_title_2_sub_header2" => $request->page_title_2_sub_header2,  
            "page_title_2_sub_header2_description" => $request->page_title_2_sub_header2_description,  
            "page_title_2_sub_header3" => $request->page_title_2_sub_header3,  
            "page_title_2_sub_header3_description" => $request->page_title_2_sub_header3_description,
            "page_title_2_sub_header4" => $request->page_title_2_sub_header4,  
            "page_title_2_sub_header4_description" => $request->page_title_2_sub_header4_description,
        ]);

        foreach($request->financing_list_id as $key => $financing_list_id){
        
            Financing::findorfail($financing_list_id)->update([
                    'page_title_1_sub_header1_list1' => $request->page_title_1_sub_header1_list1[$key],
                ]);  

        }

        foreach($request->financing_card_ids as $key => $financing_card_id){

            if($request->hasFile('page_title_2_sub_header1_card_image.'.$key)){
                $image = $request->file('page_title_2_sub_header1_card_image.'.$key)->getClientOriginalName();
                $path = $request->file('page_title_2_sub_header1_card_image.'.$key)->storeAs('financing',  $image, 'public');      
            
                Financing::findorfail($financing_card_id)->update([
                    // 'page_title_2_sub_header1_card' => 'card',             
                    'page_title_2_sub_header1_card_image' => $image,  
                ]);
            }
            else{
                $image = null;
                $path = null;
            }
            Financing::findorfail($financing_card_id)->update([
                // 'page_title_2_sub_header1_card' => 'card',
                'page_title_2_sub_header1_card_head' => $request->page_title_2_sub_header1_card_head[$key],  
                'page_title_2_sub_header1_card_description' => $request->page_title_2_sub_header1_card_head[$key],   
                'language_id' => $request->language_id,
            ]);

            }
            return redirect()->route('financing.show', $request->language_id);

    }
}