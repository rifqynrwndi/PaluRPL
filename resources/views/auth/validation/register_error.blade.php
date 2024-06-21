@error('checkbox')
                        <div class="alert alert-warning">
                            <div class="d-flex align-items-center justify-content-start">
                                <span class="alert-icon">
                                    <i class="anticon anticon-exclamation-o"></i>
                                </span>
                                <span>{{ $message }}</span>
                            </div>
                        </div>
                    @enderror
                    @error('name')
                        <div class="alert alert-warning">
                            <div class="d-flex align-items-center justify-content-start">
                                <span class="alert-icon">
                                    <i class="anticon anticon-exclamation-o"></i>
                                </span>
                                <span>{{ $message }}</span>
                            </div>
                        </div>
                    @enderror
                    @error('email')
                        <div class="alert alert-warning">
                            <div class="d-flex align-items-center justify-content-start">
                                <span class="alert-icon">
                                    <i class="anticon anticon-exclamation-o"></i>
                                </span>
                                <span>{{ $message }}</span>
                            </div>
                        </div>
                    @enderror
                    @error('nohp')
                        <div class="alert alert-warning">
                            <div class="d-flex align-items-center justify-content-start">
                                <span class="alert-icon">
                                    <i class="anticon anticon-exclamation-o"></i>
                                </span>
                                <span>{{ $message }}</span>
                            </div>
                        </div>
                    @enderror
                    @error('password')
                        <div class="alert alert-warning">
                            <div class="d-flex align-items-center justify-content-start">
                                <span class="alert-icon">
                                    <i class="anticon anticon-exclamation-o"></i>
                                </span>
                                <span>{{ $message }}</span>
                            </div>
                        </div>
                    @enderror
                    @error('password_confirmation')
                        <div class="alert alert-warning">
                            <div class="d-flex align-items-center justify-content-start">
                                <span class="alert-icon">
                                    <i class="anticon anticon-exclamation-o"></i>
                                </span>
                                <span>{{ $message }}</span>
                            </div>
                        </div>
                    @enderror
