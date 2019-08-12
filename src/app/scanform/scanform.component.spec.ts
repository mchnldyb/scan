import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ScanformComponent } from './scanform.component';

describe('ScanformComponent', () => {
  let component: ScanformComponent;
  let fixture: ComponentFixture<ScanformComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ScanformComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ScanformComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
