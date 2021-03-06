
        {{-- Header --}}
        <div>
                <v-toolbar height="75px">
                    
                    <template>
                        <v-btn icon class="hidden-md-and-up" @click.stop="drawer = !drawer">
                            <v-icon >mdi-menu</v-icon>
                        </v-btn>
                    </template>
    
                    <v-toolbar-title>
                        <div class="logo">
                            <a href="/" class="d-flex">
                                <img src="https://grandiose.net/wp-content/uploads/2019/09/grandiose-v3-logo.png" alt="Grandiose Store LLC">
                            </a>
                        </div>  
                    </v-toolbar-title>
            
                    <div class="flex-grow-1"></div>
            
                    <v-toolbar-items class="hidden-sm-and-down align-center mr-3">
                            {{-- {{ route('dashboard') }} --}}
                        <a href="#" class="caption px-3">{{ __('Dashboard') }}</a>
                        <a href="/promotion" class="caption px-3">Location</a>
                        <a href="/promotion" class="caption px-3">Contact</a>
                    </v-toolbar-items>
    
                    <v-toolbar-items class="mr-3 g-main-nav align-center">
                        
                        @guest
                            <v-toolbar-items class="mr-3 g-main-nav align-center">
                                <a class="caption px-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                <a class="caption px-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </v-toolbar-items>
                        @else
                            <v-btn text icon width="60px">     
                                <user-nav-icon
                                    :auth-user="{{ Auth::user() }}">
                                </user-nav-icon>
                            </v-btn>

                        @endguest 

                        <v-btn icon @click.stop="cartdrawer = !cartdrawer" class="" width="60px">
                            <v-badge color="red">
                                <template v-slot:badge>0</template>
                                <v-icon color="text">mdi-cart</v-icon>
                            </v-badge>
                        </v-btn>
    
                    </v-toolbar-items>
    
                </v-toolbar>
            </div>
    
    
    
            {{-- Navigation Drawers --}}
            <v-navigation-drawer
                v-model="drawer"
                absolute
                temporary
                left>
                <v-list-item>
                <v-list-item-avatar>
                    <v-img src="https://mel-7.com/wp-content/uploads/2019/04/romel-indemne-v1.jpg"></v-img>
                </v-list-item-avatar>
                <v-list-item-content>
                    <v-list-item-title>Romel Indemne</v-list-item-title>
                </v-list-item-content>
                </v-list-item>
                <v-divider></v-divider>
                <v-list dense>
                <v-list-item
                    v-for="item in items"
                    :key="item.title"
                    link
                >
                    <v-list-item-icon>
                    <v-icon></v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                    <v-list-item-title></v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                </v-list>
            </v-navigation-drawer>
    
    
            {{-- Cart Drawer --}}
            <v-navigation-drawer
                v-model="cartdrawer"
                absolute
                width="300px"
                temporary
                right>
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-title>SHOPPING CART</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-divider></v-divider>
    
                <v-list subheader>
                    <v-list-item>
                        <v-list-item-avatar>
    
                            <img src="{{ asset('img') }}/product/basmati-rice.jpg" alt="" style="width:50px;height:50px;">
                        </v-list-item-avatar>
                        <v-list-item-content>
                            <v-list-item-title>10.00 AED</v-list-item-title>
                            <v-list-item-title>Thi is the title</v-list-item-title>
                            <v-list-item-subtitle>remove</v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item>
                        <v-list-item-avatar>
                            <img src="{{ asset('img') }}/product/basmati-rice.jpg" alt="" style="width:50px;height:50px;">
                        </v-list-item-avatar>
                        <v-list-item-content>
                            <v-list-item-title>10.00 AED</v-list-item-title>
                            <v-list-item-title>Thi is the title</v-list-item-title>
                            <v-list-item-subtitle>remove</v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item>
                        <v-list-item-avatar>
                            <img src="{{ asset('img') }}/product/basmati-rice.jpg" alt="" style="width:50px;height:50px;">
                        </v-list-item-avatar>
                        <v-list-item-content>
                            <v-list-item-title>10.00 AED</v-list-item-title>
                            <v-list-item-title>Thi is the title</v-list-item-title>
                            <v-list-item-subtitle>remove</v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-list-item>
                        <v-list-item-avatar>
                            <img src="{{ asset('img') }}/product/basmati-rice.jpg" alt="" style="width:50px;height:50px;">
                        </v-list-item-avatar>
                        <v-list-item-content>
                            <v-list-item-title>10.00 AED</v-list-item-title>
                            <v-list-item-title>Thi is the title</v-list-item-title>
                            <v-list-item-subtitle>remove</v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                    <v-divider class="mb-5"></v-divider>
                    
                    <v-list-item>
                        <a href="/checkout" class="mb-3 v-btn v-btn--contained theme--light v-size--large primary" style="width:100%;">Checkout</a>
                    </v-list-item>
                    <v-list-item color="primary">
                        <a href="/shop" class="mb-3 v-btn v-btn--contained theme--light v-size--large secondary"  style="width:100%;color:#000000;">Continue Shopping</a>
                    </v-list-item>
                </v-list>
            </v-navigation-drawer>
    